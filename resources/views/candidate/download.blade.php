<!DOCTYPE html>
<html>
<head>
	<title>ID Card</title>
	<style type="text/css">
		table {
		  border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan="2" align="center"><img src="{{ asset('website/images/logo.png')}} " alt="" style="height: 100px; width: auto;"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">{{ $leagueInfo->league_name }}</td>
		</tr>
		<tr>
			<td><b>NAME:</b> {{ $candidate->name }}</td>
			<td rowspan="3" align="center"><img src="{{asset('candidate/')}}/{{ $candidate->id }}/{{ $candidate->photo }}" alt="" style="height: 50px; width:auto;"></td>
		</tr>
		<tr>
			<td><b>S/D/W OF:</b> </td>
		</tr>
		<tr>
			<td><b>DOB:</b> {{ $candidate->date_of_birth }}</td>
		</tr>
		<tr>
			<td colspan="2"><b>BLOOD GROUP:</b> {{ $candidate->bloodgroup }}</td>
		</tr>
		<tr>
			<td colspan="2"><b>STATE:</b> {{ $candidate->state }}</td>
		</tr>
		<tr>
			<td colspan="2"><b>REG. NO.:</b> {{ $candidate->registration_no }}</td>
		</tr>
		<tr>
			<td colspan="2">PLAYER</td>
		</tr>
		<tr>
			<td colspan="2"><b>AGE GROUP:</b> {{ $candidate->age }}</td>
		</tr>
		<tr>
			<td colspan="2"><b>ARTISTIC YOGASANA</b></td>
		</tr>
		<tr>
			<td align="center" style="height: 50px;">SIGN</td>
			<td align="center" style="height: 50px;">SIGN</td>
		</tr>
		<tr>
			<td colspan="2" align="center" style="height: 50px;">AUTHORITY SIGNATURE</td>
		</tr>
	</table>
</body>
</html>