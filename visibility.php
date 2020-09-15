<?php 
class komputer
{
	public $prosesor = "Core i3";
	public $memory = "16 GB";
	public function memutar_video()
	{
		return "Komputer memutar video";
	}
}
 
$komputer_bunga = new komputer();
echo $komputer_bunga->prosesor;
echo "<br/>";
echo $komputer_bunga->memory;
echo "<br/>";
echo $komputer_bunga->memutar_video();
?>