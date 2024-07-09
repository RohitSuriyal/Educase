<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CKEditor Example</title>
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <style>
    .editor-container {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  
  <h1>CKEditor Example</h1>
  
  <div class="editor-container">
    <textarea name="editor1" id="editor1"></textarea>
  </div>

  <script>
    CKEDITOR.replace('editor1', {
      extraPlugins: 'pastefromword',
      height: 300,
      pasteFromWordRemoveFontStyles: false,
      pasteFromWordRemoveStyles: false
    });
  </script>

</body>
</html>
