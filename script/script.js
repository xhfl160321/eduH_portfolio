(function(){
    var navLinks = $("#navLinks");
    var navBtnShow = $("i.fa-solid.fa-ellipsis");
    var navBtnhide = $("i.fa-solid.fa-xmark");


    // media query 시 작동되는 메뉴 이벤트
    navBtnShow.click(function(){
        navLinks.css({"right":"0"});
        console.log("menu show");
    });

    navBtnhide.click(function(){
        navLinks.css({"right":"-200px"});
        console.log("menu hide");
    });
       
})(jQuery);