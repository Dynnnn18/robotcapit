from flask import Flask, jsonify, request, render_template
import firebase_admin
from firebase_admin import credentials, db
from flask_cors import CORS
from dotenv import load_dotenv
import os

# Memuat variabel lingkungan dari file .env
load_dotenv()

# Mendapatkan kredensial dari .env
FIREBASE_DATABASE_URL = os.getenv("FIREBASE_DATABASE_URL")
FIREBASE_PROJECT_ID = os.getenv("FIREBASE_PROJECT_ID")
FIREBASE_PRIVATE_KEY_ID = os.getenv("FIREBASE_PRIVATE_KEY_ID")
FIREBASE_PRIVATE_KEY = os.getenv("FIREBASE_PRIVATE_KEY").replace("\\n", "\n")
FIREBASE_CLIENT_EMAIL = os.getenv("FIREBASE_CLIENT_EMAIL")
FIREBASE_CLIENT_ID = os.getenv("FIREBASE_CLIENT_ID")
FIREBASE_AUTH_URI = os.getenv("FIREBASE_AUTH_URI")
FIREBASE_TOKEN_URI = os.getenv("FIREBASE_TOKEN_URI")
FIREBASE_AUTH_PROVIDER_X509_CERT_URL = os.getenv("FIREBASE_AUTH_PROVIDER_X509_CERT_URL")
FIREBASE_CLIENT_X509_CERT_URL = os.getenv("FIREBASE_CLIENT_X509_CERT_URL")

# Inisialisasi Firebase Admin SDK menggunakan nilai dari .env
firebase_config = {
    "type": "service_account",
    "project_id": FIREBASE_PROJECT_ID,
    "private_key_id": FIREBASE_PRIVATE_KEY_ID,
    "private_key": FIREBASE_PRIVATE_KEY,
    "client_email": FIREBASE_CLIENT_EMAIL,
    "client_id": FIREBASE_CLIENT_ID,
    "auth_uri": FIREBASE_AUTH_URI,
    "token_uri": FIREBASE_TOKEN_URI,
    "auth_provider_x509_cert_url": FIREBASE_AUTH_PROVIDER_X509_CERT_URL,
    "client_x509_cert_url": FIREBASE_CLIENT_X509_CERT_URL
}

cred = credentials.Certificate(firebase_config)
firebase_admin.initialize_app(cred, {
    'databaseURL': FIREBASE_DATABASE_URL
})

# Inisialisasi Flask
app = Flask(__name__)
CORS(app)

# Route untuk mendapatkan semua data dari path tertentu
@app.route('/get-data/<path>', methods=['GET'])
def get_data(path):
    try:
        ref = db.reference(path)
        data = ref.get()
        return jsonify(data), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk menambahkan atau memperbarui data di path tertentu
@app.route('/set-data/<path>', methods=['POST'])
def set_data(path):
    try:
        data = request.json  # Data dikirimkan sebagai JSON
        ref = db.reference(path)
        ref.set(data)
        return jsonify({"message": "Data set successfully"}), 201
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk menambahkan data baru dengan ID unik di path tertentu
@app.route('/push-data/<path>', methods=['POST'])
def push_data(path):
    try:
        data = request.json
        ref = db.reference(path)
        new_ref = ref.push(data)
        return jsonify({"message": "Data pushed successfully", "key": new_ref.key}), 201
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk menghapus data dari path tertentu
@app.route('/delete-data/<path>', methods=['DELETE'])
def delete_data(path):
    try:
        ref = db.reference(path)
        ref.delete()
        return jsonify({"message": "Data deleted successfully"}), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk memperbarui data di path tertentu
@app.route('/update-data/<path>', methods=['PUT'])
def update_data(path):
    try:
        data = request.json
        ref = db.reference(path)
        ref.update(data)
        return jsonify({"message": "Data updated successfully"}), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500

@app.route('/')
def main():
    return render_template('Arena.html')

# Menjalankan server Flask
if __name__ == '__main__':
    app.run(debug=True)
