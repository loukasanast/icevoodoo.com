<?php
/*
    Copyright (C) 2011 Ross Lagerwall <rosslagerwall@gmail.com>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
	function comment($pageName) {
		echo '<div id="comment" style="width:80%;margin:0 auto;">';
		echo '
			<div id="write" style="margin:0 0 20px 0;">
				<form method="post">
				<!--<form method="post" action="postcomment.php">-->
					<table style="width:100%;">
						<tr><td><input type="text" name="name" style="display:block;width:100%;height:40px;padding:0 0 0 10px;border:1px solid grey;margin:0 0 10px 0;outline:none;" placeholder="Name:" /></td></tr>
						<tr><td><textarea name="comment" style="display:block;width:100%;height:60px;font-size:30px;border:1px solid grey;padding:10px;outline:none;" placeholder="Comment: (DISABLED / RETIRED)"></textarea></td></tr>
						<tr><td><input type="submit" name="submit" value="Submit" style="display:block;margin:10px 0 0 0;background:#000;color:#fff;border:none;border-radius:0;width:100px;height:32px;" /></td></tr>
					</table>
					<input type="hidden" name="page" value="'.$pageName.'" />
				</form>
			</div>';
		
		if (file_exists($pageName."c.txt")) {
			$fileC = file($pageName."c.txt");
			foreach ($fileC as $line) {
				$arr = explode("~", $line);
				echo "<div style='border:1px dashed blue; padding:16px 20px;margin:20px 0;border-radius:16px;'><span style='font-size:11px;'>".$arr[0]." at ".date("D M j Y", $arr[1]).":</span>";
				echo "<blockquote style='margin-top: 0px;font-size:20px;'>".$arr[2];
				echo "</blockquote></div>";
			}
		}
		else {
			echo "No comments!";
		}

		echo "</div>";
	}
?>
