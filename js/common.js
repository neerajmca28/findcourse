/*
 * This method is used to get the course detail based on course id..
 * 
 * 
 */

function getTopicDetail(topicId)
{
	var curl = "../action/CourseDetailAction.php"
	
	 $.ajax({    
         url: curl,
         data:{topicId:topicId},
         async:false,
         success:function(data)
         {
        	 $("#dataDivId").html(data);
         }
     });


}


/*
 * this method is used to sumit the courseform 
 */

function getSubmitCourseForm(id)
{
	document.getElementById("course_"+id).value=id;
	document.getElementById("frm_"+id).submit();

}
