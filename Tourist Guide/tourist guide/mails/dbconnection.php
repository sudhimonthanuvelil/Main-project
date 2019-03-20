
<?php
	class DbConnection
		{
			var $con;
			public function __construct()
				{
					$this->con=mysqli_connect("localhost","root","","tourist_guide") or die("error");
				}
			public function executeQuery($sql)
				{
					$result=mysqli_query($this->con,$sql);
					return $result;
				}
			public function executeNonQuery($sql)
				{
					try
					{
						mysqli_query($this->con,$sql);
						return true;
					}
					catch(Exception $e)
					{
						return false;
					}
				}
			public function delMedia($mid)
				{
					try
					{
					@unlink('../Pictures/'.$mid);
						return true;
					}
					catch(Exception $e)
					{
						return false;
					}
				}
			
			public function disConnect()
			{
				mysqli_close($this->con);
			}
		}
	?>

