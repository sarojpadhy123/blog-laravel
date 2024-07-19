<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Blog</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
    <style>
       /* Form container */
.form-container {
  max-width: 60vw;
  height: 90vh;
  margin: 0 auto;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color:#042145;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

/* Form title */
.form-container h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
  color: white;
}

/* Form field labels */
.form-group label {
  font-size: 18px;
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color:white;
}

/* Form input fields */
.form-group input[type="text"],
.form-group input[type="file"],
.form-group textarea {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.2);
}

/* Form input fields on focus */
.form-group input[type="text"]:focus,
.form-group input[type="file"]:focus,
.form-group textarea:focus {
  outline: none;
  box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.4);
}

/* Form input fields with errors */
.form-group input[type="text"].error,
.form-group input[type="file"].error,
.form-group textarea.error {
  border: 2px solid #ff0000;
  box-shadow: inset 0px 0px 5px rgba(255, 0, 0, 0.4);
}

/* Form input fields with success */
.form-group input[type="text"].success,
.form-group input[type="file"].success,
.form-group textarea.success {
  border: 2px solid #00cc00;
  box-shadow: inset 0px 0px 5px rgba(0, 204, 0, 0.4);
}

/* Form HTML editor */
#editor {
  margin-top: 10px;
  margin-bottom: 20px;
  width:45vw;
  height:20vh;
}

/* Form submit button */
button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 12px 30px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

/* Form submit button on hover */
button[type="submit"]:hover {
  background-color: #0062cc;
}


/* custom choosefile design in css */

/* .choosefile {
  background-color: #0062cc;
  color: #fff;
  padding: 12px 30px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
} */
/* Form file input */
.form-group input[type="file"] {
  position: relative;
  overflow: hidden;
}

/* Form file input button */
.form-group input[type="file"] + label {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

/* Form file input button on hover */
.form-group input[type="file"] + label:hover {
  background-color: #0062cc;
}

/* Form file input button on focus */
.form-group input[type="file"] + label:focus {
  outline: none;
}

/* Form file input button text */
.form-group input[type="file"] + label span {
  position: relative;
  z-index: 1;
}

/* Form file input button icon */
.form-group input[type="file"] + label::after {
  content: '\f07b'; /* Font Awesome icon */
  font-family: FontAwesome;
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  z-index: 0;
  font-size: 16px;
  transition: transform 0.3s ease-in-out;
}

/* Form file input button icon on hover */
.form-group input[type="file"] + label:hover::after {
  transform: translateY(-50%) rotate(90deg);
}

/* HTML EDITOR */

#container {
                width: 50vw;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }



    </style>



</head>


<body>
<div class="form-container">
  <h2>Create blog Post</h2>
  @if (session('status'))
  <p style="color:white;">{{session('status')}}</p>
  @endif
  <form id="my-form" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="{{old('title')}}" required>
      @error('title')
      {{--the $attributeValue is must be $validationRule--}}
        <div class="text-danger" style="color:red;">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" id="image" name="image" required>
      @error('image')
      {{--the $attributeValue is must be Type of $validationRule--}}
        <div class="text-danger" style="color:red;">{{ $message }}</div>
      @enderror
    </div>



    <div id="container">
    <label for="body-description" style="color:white;">Body Description</label>

            <div id="editor">
                <textarea id="editor" name="editor" ></textarea>
                <!-- {{old('title')}} -->
                <!-- @error('editor')
      {{--the $attributeValue is must be $validationRule--}}
        <div class="text-danger" style="color:red;">{{ $message }}</div>
      @enderror -->
            </div>
        </div>



    <button type="submit">Submit</button>


  </form>
</div>


<script>
    // Initialize the HTML editor
const editor = new FroalaEditor('#editor');

// Handle form submission
const form = document.getElementById('my-form');
form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Get form data
  const formData = new FormData(form);

  // Submit form data
  fetch('/submit-form', {
    method: 'POST',
    body: formData
  })
    .then(response => {
      // Handle response
      console.log(response);
    })
    .catch(error => {
      // Handle error
      console.error(error);
    });
});

</script>

<script>
            // This sample still does not showcase all CKEditor 5 features (!)
            // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                placeholder: 'Welcome to CKEditor 5!',
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                // Be careful with enabling previews
                // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                htmlEmbed: {
                    showPreviews: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                // The "super-build" contains more premium features that require additional configuration, disable them below.
                // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType
                    'MathType'
                ]
            });
        </script>
</body>
</html>