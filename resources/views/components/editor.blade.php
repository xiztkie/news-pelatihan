<!-- TinyMCE CDN -->
    <script src="{{ asset('assets/js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>

    <script>
        // Inisialisasi TinyMCE
        document.addEventListener('DOMContentLoaded', () => {
            tinymce.init({
                selector: '#editor',
                plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount',
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                height: 300
            });
        });
    </script>