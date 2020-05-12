<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

    <div class="container">
        <div class="row ">
            <div class="col-md-4 card text-center p-3 m-4">
                     <h5 class="mt-2"> File Upload</h5><hr>
                    <input type="file" class="form-control-file form-control fileInput">
                    <button class="btn upBtn my-4 btn-primary">Upload</button>
                    <h5 class="Upprogress"></h5>
            </div>

            <div class="col-md-4 card text-center p-3 m-4">
               <table class="table table-bordered">
                   <thead>
                   <tr>
                       <td>No</td>
                       <td>Download</td>
                   </tr>
                   </thead>

                   <tbody class="tableData">

                   </tbody>
               </table>

            </div>

        </div>
    </div>


    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <script type="text/javascript">

        getFileList();
        function getFileList(){
            axios.get('/fileList').then(function (response) {
              var JSONDATA=  response.data;

              $.each(JSONDATA,function (i) {
                  $('<tr>').html(
                      "<td>"+JSONDATA[i].id+"</td> " +
                      "<td><a href='/fileDownload/"+JSONDATA[i].file_path+"'class='btn  btn-primary'   >Download</button></td>"
                  ).appendTo('.tableData');
              })



            }).catch(function (error) {

            })

        }


        $('.upBtn').click(function () {

            var MyFile= $('.fileInput').prop('files')
            var MyFormData=new FormData();
            MyFormData.append('FileKey',MyFile[0]);

            var config={
                headers:{'content-type':'multipart/form-data'},
                onUploadProgress:function (progressEvent) {

                    let UpMB= (progressEvent.loaded/(1024*1024)).toFixed(2) +" MB";
                    $('.Upprogress').html(UpMB);

                }
            }

            axios.post('/fileUp',MyFormData,config).then(function (response) {
                if(response.status==200){
                    $('.Upprogress').html("Success");
                }else{
                    $('.Upprogress').html("Error");
                }
            }).catch(function (error) {
                $('.Upprogress').html("Error");
            })


        })
    </script>
    </body>
</html>
