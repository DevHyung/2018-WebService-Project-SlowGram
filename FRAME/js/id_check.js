

function openCheckId(){
 //   alert("왜 함수가 먹히지 않는 걸까???????????");
    var userid=document.all.userid.value;
    if(userid){
        url="../../PAGE/user/id_check.php?userid="+userid;
        window.open(url,"chkid","width=500,height=100,top=300,left=700,menubar=no,toolbar=no");
    }else{
        alert("ID를 입력하세요!");
    }
}

function chkForm(){
    var checkid=document.all.checkid.value;
    if(checkid==0){
        alert("ID 중복체크를 하세요!");
        return false;
    }
    return true;
}