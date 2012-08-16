<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>War of Emperium Hours</h2>
<?php if ($woeTimes): ?>
<p>Below are the WoE hours for <?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>.
These hours are subject to change at anytime, but let's hope not.</p>
<p>The current server time is <strong><?php echo $this->formatDateTime($server->getServerTime('Y-m-d H:i:s')) ?></strong>.</p>
<table class="woe-table">
	<tr>
		<th>Servers</th>
		<th colspan="3">War of Emperium Times</th>
	</tr>
	<?php foreach ($woeTimes as $serverName => $times): ?>
	<tr>
		<td class="server" rowspan="<?php echo count($times)+1 ?>">
			<?php echo htmlspecialchars($serverName)  ?>
		</td>
	</tr>
	<?php foreach ($times as $time): ?>
	<tr>
		<td class="time">
			<?php echo htmlspecialchars($time['startingDay']) ?>
			@ <?php echo htmlspecialchars($time['startingHour']) ?>
		</td>
		<td>~</td>
		<td class="time">
			<?php echo htmlspecialchars($time['endingDay']) ?>
			@ <?php echo htmlspecialchars($time['endingHour']) ?>
		</td>
	</tr>
	<?php endforeach ?>
	<?php endforeach ?>
</table>
<?php else: ?>
<p>There are no scheduled WoE hours.</p>
<?php endif ?>