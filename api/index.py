from flask import Flask, jsonify, request, render_template
import firebase_admin
from firebase_admin import credentials, db
from flask_cors import CORS

# Inisialisasi Firebase Admin SDK
cred = credentials.Certificate("./api/robotcapit-5ae75-firebase-adminsdk-f1fij-9d3d4ed776.json")
firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://robotcapit-5ae75-default-rtdb.asia-southeast1.firebasedatabase.app/'  # Ganti dengan URL Realtime Database Anda
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

def main ():
    return render_template('Arena.html')


# Menjalankan server Flask
if __name__ == '__main__':
    app.run(debug=True)
