function SendData(){

   var myName= document.getElementById('myName').value;
   var myRoll=  document.getElementById('myRoll').value;
   var myClass=  document.getElementById('myClass').value;


   var url="/insertData";
   var data={name:myName,roll:myRoll,class:myClass};


   axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });

}


function DeleteData(){

  var myID= document.getElementById('myID').value;
  var url="/deleteData";
  var data={id:myID};

  axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });



}


function UpdateData(){

  var myName= document.getElementById('myName').value;
  var myRoll= document.getElementById('myRoll').value;
  var myClass= document.getElementById('myClass').value;
  var myID=document.getElementById('myId').value;

  var url="/updateData";
  var data={name:myName,roll:myRoll,class:myClass,id:myID};



  axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });



}