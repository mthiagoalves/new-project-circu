<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<meta name='viewport' content='width=device-width'>
		<link href='//fonts.googleapis.com/css?family=Roboto|Old+Standard+TT' rel='stylesheet' type='text/css'>
		<style type='text/css'>
			* {
				margin:0;
				padding:0;
			}

			a {
				text-decoration:none;
			}

			a img {
				text-decoration:none;
				border:none;
			}

			table {
				border-collapse:collapse;
				border-spacing:0;
				margin: 0 auto;
			}

			table tr td.email-content a{
				text-decoration: underline;
				color: #fff;
			}

			body {
				margin:0;
				padding:0;
				background:#FFF;
			}

			img {
				border:none;
				display:block;
				margin:auto;
			}

			p {
				margin:0 0 0 25px;
				line-height:15px;
				font-size: 13px;
    			font-family: arial;
			}

			span {
				display:none;
				margin:0;
				padding:0;
				font-size:0;
			}

			.top {
				font-size:10px;
				color:#666;
				font-family:'Arial',sans-serif!important;
				text-align:center;
			}

			.ExternalClass {
				width:100%;
			}

			.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {
				line-height:100%;
			}
		</style>
	</head>
	<body>
		<table>
			<tbody>
				{{-- <tr>
					<td width="600" height="105">
						<a href="http://www.circu.net/" title="">
							<img src="/images/logo-circu-magical-furniture.png" alt="">
						</a>
					</td>
				</tr> --}}
				<tr>
					<td width="600" style="padding: 20px;">
						@yield('main-content')
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>