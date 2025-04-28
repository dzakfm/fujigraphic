$(document).ready(function() {
    $('#summernote').summernote({
      height: 300,
      placeholder: 'Tulis konten artikel di sini...',
      focus: true,
      toolbar: [
        // Baris Style
        ['style', ['style']],
        // Baris Font
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        // Baris Fontname dan fontsize
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        // Baris Color
        ['color', ['color']],
        // Baris Paragraph (ul, ol, paragraph)
        ['para', ['ul', 'ol', 'paragraph']],
        // Baris Height (jarak antar baris)
        ['height', ['height']],
        // Baris Table
        ['table', ['table']],
        // Baris Insert (gambar, link, video, horizontal line)
        ['insert', ['link', 'picture', 'video', 'hr']],
        // Baris Misc (fullscreen, codeview, undo, redo, help)
        ['view', ['fullscreen', 'codeview', 'help']],
        ['misc', ['undo', 'redo']]
      ]
    });
  });
  