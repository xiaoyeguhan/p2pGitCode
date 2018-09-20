$.get('./api/checkState.php',(data)=>{
    if(! data.isSuccess){
        alert(data.message);
        location.href="./login.php";
    }
},'json')