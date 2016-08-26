<?php
include '../db/dbcontroller.php';

class ContentService
{
	
	function getAllCourse()
	{
		$query = "select *from course where status=1 order by seqno asc";
		$dbcontroll = new DbHandler();
		$status = $dbcontroll->queryExecute($query);
		return $status;
	}
	
	
	function getAllCourseDetail($courseId)
	{
		
	}
	
	public function getCourseDetailByCourseId($courseId,$type)
	{
		$query = "select cd.seqno as seqno,cd.type as type, cd.courseid as courseid,cd.isstatus as isstatus,cs.coursename as coursename, cd.id as id,cd.topicname as topicname,cd.topicdesc as description,cd.isstatus as isstatus from coursedetail cd,course cs where cd.courseid = cs.id and cd.courseid='$courseId' and cd.type='$type' order by seqno asc";
		$dbcontroll = new DbHandler();
		$status = $dbcontroll->queryExecute($query);
		return $status;
	
	}
	
	
	/*
	 * this method is used to get the topic details by topic Id.
	 */
	
	public function getTopicById($topicId)
	{
		$query = "select cd.courseid as courseid,cd.isstatus as isstatus,cs.coursename as coursename, cd.id as id,cd.topicname as topicname,cd.topicdesc as description,cd.isstatus as isstatus from coursedetail cd,course cs where cd.courseid = cs.id and cd.id='$topicId' ";
		$dbcontroll = new DbHandler();
		$status = $dbcontroll->queryExecute($query);
		return $status;
	
	}
	
	
	/*
	 * this method is used to get Course by Name
	 */
	
	
	public function getCourseByName($courseName)
	{
		$query = "select id from course where coursename='$courseName'"; 
		$dbcontroll = new DbHandler();
		$status = $dbcontroll->queryExecute($query);
		return $status;
		
	}
	
	
	
}



?>