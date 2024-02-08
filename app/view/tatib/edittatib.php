<div class="edit-html-view">
    <h3 class="text-center text-dark mb-4">TATA TERTIB PELAKSANAAN PRAKTIKUM LABORATORIUM TERPADU</h3>
    <textarea class="form-control" rows="20">
        <!-- Copy dan tempelkan HTML yang ingin diubah di sini -->
        
    </textarea>
    <button class="btn btn-primary mt-2" onclick="saveChanges()">Simpan Perubahan</button>
</div>

<script>
    function saveChanges() {
        // Mengambil isi dari textarea
        var editedHTML = document.querySelector('.edit-html-view textarea').value;

        // Simpan perubahan ke server (Anda mungkin perlu menggunakan Ajax atau cara lain)
        console.log('Perubahan disimpan:', editedHTML);
    }
</script>
