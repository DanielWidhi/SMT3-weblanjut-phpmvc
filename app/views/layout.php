<!-- Misal di layout.php atau nama_view.php -->
<script>
function showLoadingSpinner() {
    document.getElementById('loading-spinner').style.display = 'block';
}

function hideLoadingSpinner() {
    document.getElementById('loading-spinner').style.display = 'none';
}

// Contoh penggunaan saat mengirim form
document.getElementById('formID').addEventListener('submit', function() {
    showLoadingSpinner();
});
</script>
