@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - Dashboard @endsection

@section('styles')
<style>
    output{
  width: 100%;
  min-height: 150px;
  display: flex;
  justify-content: flex-start;
  flex-wrap: wrap;
  gap: 15px;
  position: relative;
  border-radius: 5px;
}

output .image{
  height: 150px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;
  position: relative;
}

output .image img{
  height: 100%;
  width: 100%;
}

output .image span {
  position: absolute;
  top: -4px;
  right: 4px;
  cursor: pointer;
  font-size: 22px;
  color: white;
}

output .image span:hover {
  opacity: 0.8;
}

output .span--hidden{
  visibility: hidden;
}
</style>
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dummy</a></li>
                    <li class="breadcrumb-item active">Dummy</li>
                </ol>
            </div>
            <h4 class="page-title">
                Dummy
            </h4>
        </div>
    </div>
</div>
<div class="row">
    <form action="{{ route('upload-multiple-image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <input type="file" multiple="multiple" accept="image/jpeg, image/png, image/jpg" id="image" name="nanny_images[]" onchange="image_select()">
            <div id="container"></div>
        </div>
        <div class="col-12">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
<!-- end page title -->
@endsection

@section('scripts')
<script>
    var images = [];
      function image_select() {
          var image = document.getElementById('image').files;
          for (i = 0; i < image.length; i++) {
            images.push({
                "name" : image[i].name,
                "url" : URL.createObjectURL(image[i]),
                "file" : image[i],
            })
          }
          document.getElementById('container').innerHTML = image_show();
      }

      function image_show() {
          var image = "";
          images.forEach((i) => {
             image += `<div class="image_container d-flex justify-content-center position-relative">
                  <img src="`+ i.url +`" alt="Image">
                  <span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>
              </div>`;
          })
          return image;
      }
      function delete_image(e) {
        images.splice(e, 1);
        document.getElementById('container').innerHTML = image_show();

        const dt = new DataTransfer()
        const input = document.getElementById('image')
        const { files } = input

        for (let i = 0; i < files.length; i++) {
            const file = files[i]
            if (e !== i)
            dt.items.add(file);
        }

        input.files = dt.files;
        console.log(document.getElementById('image').files);
      }
</script>
<script>
    // const output = document.querySelector("output");
    // const input = document.querySelector("#files_input");
    // let imagesArray = [];

    // input.addEventListener("change", () => {
    //     const files = input.files
    //     for (let i = 0; i < files.length; i++) {
    //         imagesArray.push(files[i])
    //     }
    //     displayImages()
    // });


    // function displayImages() {
    //     let images = ""
    //     imagesArray.forEach((image, index) => {
    //         images += `<div class="image">
    //                     <img src="${URL.createObjectURL(image)}" alt="image">
    //                     <span onclick="deleteImage(${index})">&times;</span>
    //                 </div>`
    //     })
    //     output.innerHTML = images
    // }

    // function deleteImage(index) {
    //     imagesArray.splice(index, 1);
    //     const fileListArr = Array.from(input.files)
    //     fileListArr.splice(index, 1) // here u remove the file
    //     input.files = fileListArr;
    //     console.log(fileListArr);
    //     // input.files = input.files.splice(index, 1);
    //     // console.log(input.files);
    //     // input.files = imagesArray;
    //     displayImages();
    // }
</script>
@endsection