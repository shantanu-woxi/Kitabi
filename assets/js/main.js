$(document).ready(function(){
  $(".loginLink").click(function(){
    $(".loignForm").slideToggle();
  });

  // dashboard subjects show/hide
  $("#engcall").click(function(){
    getChaptersList(1);
    hideSubjectWrap();
    $("#engLessons").show();
  });
  $("#gkcall").click(function(){
    getChaptersList(2);
    hideSubjectWrap();
    $("#gkLessons").show();
  });
  $("#mathscall").click(function(){
    getChaptersList(3);
    hideSubjectWrap();
    $("#mathsLessons").show();
  });
  $("#reasoncall").click(function(){
    getChaptersList(4);
    hideSubjectWrap();
    $("#reasonLessons").show();
  });
  $(".backToSubjects").click(function(){
    $(".subjectData").hide();
    showSubjectWrap();
    return false;
  });
  /*
   * alert fadeout functions
   */
  setTimeout(function() {
   $('.alert').fadeOut().text('')
  }, 2000 );
  // dashboardmenu height
  var dashboardmenuHeight = $(window).height() - ($(".welcomeStrip").height() + $(".header").height()); 
  $(".sidebarNav").height(dashboardmenuHeight);
});
var hideSubjectWrap = function() {
  $(".subjectsWrap").hide();
}
var showSubjectWrap = function() {
  $(".subjectsWrap").show();
}

var loadChapters = function (subId, rType)
{
  console.log('laxdeep');
  $("#loader").show();
  $("#loader").fadeIn(400).html('Please wait... <img src="assets/images/loading.gif" />');
  $.ajax({
    type: "POST",
    url: "get-chapters",
    data:{subid: subId},
    cache: false,
    success: function(result){
      if(rType=="upload")
      {
      
          $("#loader").hide(); 
          $("#selectSectionId").html(result);  
      }
      else if(rType=="section_test")
      {
          $("#test_loader").hide(); 
          $("#selectTestSectionId").html(result);  
      }
    }
  });
}

var getChaptersList = function (subId){
  $.ajax({
    type: "POST",
    url: "get-chapters-list",
    data:{subid: subId},
    cache: false,
    success: function(result){
      if(subId == 1){
        $("#englishContent").html(result);
      }
      
      if(subId == 2){
        $("#gkContent").html(result);
      }

      if(subId == 3){
        $("#mathsContent").html(result);
      }

      if(subId == 4){
        $("#reasoningContent").html(result);
      } 
    }
  });
}

var displayOptionType = function(questionNumber, type){
    if(type == 'text'){
       $("#question"+questionNumber).parents('.form-group').nextAll(".text-block:first").show();
       $("#question"+questionNumber).parents('.form-group').nextAll(".image-block:first").hide();
    }else{       
       $("#question"+questionNumber).parents('.form-group').nextAll(".image-block:first").show();
       $("#question"+questionNumber).parents('.form-group').nextAll(".text-block:first").hide();
    }
    
}
