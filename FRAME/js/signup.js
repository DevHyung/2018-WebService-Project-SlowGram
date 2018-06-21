

var a=0;


function fun_username(form) {
    if(a==0){
        if (form.username.value.length < 2) {
            alert("이름은 2자 이상 입력해주십시오.");
            form.username.value="";
            form.username.focus();
            a=1;
        }
    } else {
        a=0;
    }
}


function fun_usernum(form) {
    if(a==0){
        if (form.usernum.value.length != 10) {
            alert("학번은 10자리로 입력해주십시오.");
            form.usernum.value="";
            form.usernum.focus();
            a=1;
        }
    } else {
        a=0;
    }

    for (i=0; i<form.usernum.value.length; i++) {
        var ch = form.usernum.value.charAt(i);

        if ( ch < "0" || ch > "9" ) {
            alert("학번은 숫자만 사용하여 입력해주십시오.");
            form.usernum.value="";
            form.usernum.select();
            a=1;
        }
    }

}


function fun_userid(form) {
    if(a==0){
        if (form.userid.value.length < 6 || form.userid.value.length > 20) {
            alert("아이디는 6~20자로 입력해주십시오.");
            form.userid.value="";
            form.userid.focus();
            a=1;
        }

    } else {
        a=0;
    }

    for (i=0; i<form.userid.value.length; i++) {
        var ch = form.userid.value.charAt(i);

        if ( ( ch < "a" || ch > "z") && (ch < "A" || ch > "Z") && (ch < "0" || ch > "9" ) ) {
   //         if(!(ch=="!" || ch=="@" || ch=="#" || ch=="$" || ch=="&" || ch=="*" || ch=="-" || ch=="_" || ch=="+" || ch=="?")) {
                alert("아이디에 특수문자 못써요 ~");
                form.userid.value="";
                form.userid.select();
                a=1;
   //         }
        }
    }
}


function fun_userpw(form) {
    if(a==0){
        if (form.userpw.value.length < 8 || form.userpw.value.length > 20) {
            alert("비밀번호는 8~20자로 입력해주십시오.");
            form.userpw.value="";
            form.userpw.focus();
            a=1;
        }
    } else {
        a=0;
    }

    for (i=0; i<form.userpw.value.length; i++) {
        var ch = form.userpw.value.charAt(i);

        if ( ( ch < "a" || ch > "z") && (ch < "A" || ch > "Z") && (ch < "0" || ch > "9" ) ) {
      //      if(!(ch=="!" || ch=="@" || ch=="#" || ch=="$" || ch=="&" || ch=="*" || ch=="-" || ch=="_" || ch=="+" || ch=="?")) {
                alert("비밀번호에 특수문자 못써요 ~");
                form.userpw.value="";
                form.userpw.select();
                a=1;
      //      }
        }
    }

}


function fun_userpw_ch(form) {
    if(a==0){
        if (form.userpw_ch.value != form.userpw.value) {
            alert("비밀번호를 똑같이 입력해주십시오.");
            form.userpw_ch.value="";
            form.userpw_ch.focus();
            a=1;
        }
    } else {
        a=0;
    }
}



function fun_userphone_1(form) {
    if(a==0){
        for (i=0; i<form.userphone_1.value.length; i++) {
            var ch = form.userphone_1.value.charAt(i);

            if ( ch < "0" || ch > "9" ) {
                alert("번호는 숫자만 사용하여 입력해주십시오.");
                form.userphone_1.value="";
                form.userphone_1.select();
                a=1;
            }
        }
    } else {
        a=0;
    }
}

function fun_userphone_2(form) {
    if(a==0){
        for (i=0; i<form.userphone_2.value.length; i++) {
            var ch = form.userphone_2.value.charAt(i);

            if ( ch < "0" || ch > "9" ) {
                alert("번호는 숫자만 사용하여 입력해주십시오.");
                form.userphone_2.value="";
                form.userphone_2.select();
                a=1;
            }
        }
    } else {
        a=0;
    }
}

function fun_userphone_3(form) {
    if(a==0){
        for (i=0; i<form.userphone_3.value.length; i++) {
            var ch = form.userphone_3.value.charAt(i);

            if ( ch < "0" || ch > "9" ) {
                alert("번호는 숫자만 사용하여 입력해주십시오.");
                form.userphone_3.value="";
                form.userphone_3.select();
                a=1;
            }
        }
    } else {
        a=0;
    }
}
