<?php
// error_reporting(E_ALL); 
// ini_set('display_errors', 1);
ob_start();
include 'db.php'; 

include('vendor/autoload.php');

$sitename = "Ultimate Express Logistics";
	
if (isset($_GET['tnum']) && $_GET['tnum'] != "") {
	$tnumber = $_GET['tnum'];
	$select = mysqli_query($link, "SELECT * FROM tracking WHERE tracking_number = '$tnumber' ");
    if (mysqli_num_rows($select) > 0) {
        $data = mysqli_fetch_assoc($select);

        $html = '
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>
		

		<div class="invoice-box">
		
		<br>
		<center><h3>Shipment Receipt</h3></center>
		<br>
		<center><h3><a class="nav-link" href="https://ultimateexpress-logistics.com/">Visit Our Website for Live Tracking</a></h3></center>
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<div class="logo">
                <a href="index.html">
                  <img src="login/deprixa/image_logo681a.png?id=1" alt="logo" />
                </a>
              </div>
								</td>

								<td>
									Created Date:  '.date('d M, Y').' <br />
									Created Time: '.date('h:i:sa').'
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									From:<br />
									<b>'.$data['sender_name'].'<br />
									'.$data['sender_address'].'<br />
									'.$data['sender_email'].'<br />
									</b>
								</td>

								<td>
									To:<br />
									<b>'.$data['receiver_name'].'<br />
									'.$data['receiver_address'].'<br />
									'.$data['receiver_email'].'<br />
									</b>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Shipment Details</td>

					<td></td>
				</tr>

				<tr class="item">
					<td class="text-right"><b>Parcel Description </b></td>

					<td>'.$data['pdesc'].'</td>
				</tr>
				
				
				<tr class="total">
					<td class="text-right"><b>Tracking Number </b></td>

					<td>'.$data['tracking_number'].'</td>
				</tr>
				

				
				<tr class="item last">
					<td class="text-right"><b>Courier Status </b></td>

					<td>'.$data['status'].'</td>
				</tr>
				

				<tr class="total">
					<td class="text-right"><b>Dispatch Date </b></td>

					<td>'.$data['dispatch_date'].'</td>
				</tr>
				<tr class="total">
					<td class="text-right"><b>Estimated Delivery Date </b></td>

					<td>'.$data['delivery_date'].'</td>
				</tr>
				
				
				<tr class="item">
					<td class="text-right"><b>Declared Weight </b></td>

					<td><strong>'. $data['receiver_contact'].'</td></strong>
				</tr>
				
				<tr class="item">
					<td class="text-right"><b>Courier Fee </b></td>

					<td><strong>'. $data['sender_contact'].'</td></strong>
				</tr>
				
				<tr class="total">
					<td class="text-right"><b>Current Location </b></td>

					<td>'.$data['current_location'].'</td>
				</tr>

			</table>
		</div>
	</body>
</html>
';

ob_clean();

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file = 'tracking-'.time().'.pdf';
$mpdf->Output($file,'D');

        }
	}

?>