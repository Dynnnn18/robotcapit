from flask import Flask, jsonify, request
import firebase_admin
from firebase_admin import credentials, firestore

# Inisialisasi Firebase Admin SDK
cred = credentials.Certificate("robotcapit-5ae75-firebase-adminsdk-f1fij-a055001033.json")
firebase_admin.initialize_app(cred)

# Inisialisasi Firestore
db = firestore.client()

# Inisialisasi Flask
app = Flask(__name__)

# Route untuk mendapatkan semua data dari koleksi tertentu
@app.route('/get-data/<collection_name>', methods=['GET'])
def get_data(collection_name):
    try:
        collection_ref = db.collection(collection_name)
        docs = collection_ref.stream()
        data = {doc.id: doc.to_dict() for doc in docs}
        return jsonify(data), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk menambahkan data ke koleksi tertentu
@app.route('/add-data/<collection_name>', methods=['POST'])
def add_data(collection_name):
    try:
        data = request.json  # Data dikirimkan sebagai JSON
        doc_ref = db.collection(collection_name).add(data)
        return jsonify({"message": "Data added successfully", "id": doc_ref[1].id}), 201
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk menghapus dokumen berdasarkan ID
@app.route('/delete-data/<collection_name>/<doc_id>', methods=['DELETE'])
def delete_data(collection_name, doc_id):
    try:
        doc_ref = db.collection(collection_name).document(doc_id)
        doc_ref.delete()
        return jsonify({"message": "Document deleted successfully"}), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Route untuk memperbarui dokumen berdasarkan ID
@app.route('/update-data/<collection_name>/<doc_id>', methods=['PUT'])
def update_data(collection_name, doc_id):
    try:
        data = request.json
        doc_ref = db.collection(collection_name).document(doc_id)
        doc_ref.update(data)
        return jsonify({"message": "Document updated successfully"}), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Menjalankan server Flask
if __name__ == '__main__':
    app.run(debug=True)
