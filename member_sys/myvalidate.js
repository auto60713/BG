 $().ready(function() {
  $("#form1").validate({
    rules: {
     loginname: {
      required: true,
      minlength: 3
      },   
     username: {
      required: true,
      minlength: 2
      },
     email: {
      required: true,
      email: true
      },
     pass1: {
      required: true,
      minlength: 5
      },
     pass2: {
      required: true,
      minlength: 5,
      equalTo: "#pass1"
      }
    },
    messages: {
     loginname: {
      required:"請輸入資料",
      minlength:"最少輸入三個字"
      },  
     username: {
      required:"請輸入資料",
      minlength:"最少輸入兩個字"
      },
     email: {
      required:"請輸入資料",
      email:"請輸入正確電子郵件信箱"
      },
     pass1: {
      required:"請輸入資料",
      minlength:"最少輸入五個字"
      },
    pass2: {
     required:"請輸入資料",
     minlength:"最少輸入五個字",
     equalTo: "密碼必須相同"
      }
    }
    });
  $("#form1").submit(function()
   
  
	}		
  }
 );			