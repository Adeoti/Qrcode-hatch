<div class="tool-panel" style="background:#f9fafc;">
										<div class="toolkit">
											<ul>
												<li><a href="javascript:void(null)" data-typ="main" class="active_toolkit"><i class="fa fa-qrcode"></i> Main</a></li>
												<li><a href="javascript:void(null)" data-typ="options"><i class="fa fa-cog"></i> Options</a></li>
												<li><a href="javascript:void(null)" data-typ="logo"><i class="fa fa-image"></i> Logo</a></li>
											</ul>
												<a href="javascript:void(0)" class="helpbtn abatu" title="Instructions"><i class="fa fa-question-circle"></i></a>
										</div>
											
										<div class="toolset">
											<div class="row">
												<div class="col-sm-12 col-md-7">
													<div class="item-card logo">
														<span class="spanheadb">Choose your QR logo</span><hr>
														<center><input type="file" accept="image/*" onchange="updateQrImg();" id="qr-logo" class="qr-logo" /></center>
													</div>
													<div class="item-card options">
														<span class="spanheadb">Tune your QR to fit your branding</span>
															<hr>
															<div class="pattern-ride">
															<span class="sub-headed">Size</span><br>
																<span class="badge badge-pill textsuccess">Height:</span> <input type="range" class="qr-height" value="300" min="100" max="300"/>
																<span class="heightstatus badge mysuccess">300</span>
																<br>
																<span class="badge badge-pill textsuccess">Width:</span> <input type="range" class="qr-width" min="100" value="300" max="300"/>
																<span class="widthstatus badge mysuccess">300</span>
															</div>
															<br>
															<div class="pattern-ride">
															<span class="sub-headed">Colors</span><br>
																<label class="badge badge-pill textsuccess">Front: <input type="color" class="qr-front-color"/></label> 
																&nbsp; 
																<label class="badge badge-pill textsuccess">Back: <input type="color" value="#fff" class="qr-back-color"/></label> 
																&nbsp;
																<label class="badge badge-pill textsuccess">Eye: <input value="" type="color" class="qr-eye-color" /></label> 
																<label class="badge badge-pill textsuccess">Area: <input type="color" class="qr-area-color" /></label> 
															</div><br>
															<div class="pattern-ride">
															<span class="sub-headed">Patterns</span><br>
																<div class="row">
																	<div class="col-sm-12 col-md-4">
																		<b class="textsuccess badge">Skin</b>
																<select class="form_field qr-dots">
																	<option value="dots">Cluster</option>
																	<option value="rounded">Circle</option>
																	<option value="classy" selected>Classy</option>
																	<option value="classy-rounded">Semi Radial</option>
																	<option value="square">Four Corner</option>
																	<option value="extra-rounded">Super Circle</option>
																</select>
																	</div>
																	<div class="col-sm-12 col-md-4">
																		<b class="textsuccess badge">Area</b>
																<select class="form_field qr-area">
																	<option value="dot">Circle</option>
																	<option value="square">Four Corner</option>
																	<option selected value="extra-rounded">Radial</option>
																</select>
																	</div>
																	<div class="col-sm-12 col-md-4">
																		<b class="textsuccess badge">Eye</b>
																<select class="form_field qr-eye">
																	<option value="dot">Ball</option>
																	<option value="square" selected>Four Corner</option>
																</select>
																	</div>
																</div>
															</div>
													
													</div>
													<div class="item-card main activerr">
														
															<div class="qr-type">
																	<ul>
																		<li><a href="javascript:void(null)" data-tyx="text" class="btn btn-sm qr active_qr"><i class="fa fa-bars"></i> Text</a></li>
																		<li><a href="javascript:void(null)" data-tyx="link" class="btn btn-sm qr"><i class="fa fa-link"></i> Link</a></li>
																		<li><a href="javascript:void(null)" data-tyx="email" class="btn btn-sm qr"><i class="fa fa-envelope"></i> Email</a></li>
																		<li><a href="javascript:void(null)" data-tyx="sms" class="btn btn-sm qr"><i class="fa fa-commenting"></i> SMS</a></li>
																		<li><a href="javascript:void(null)" data-tyx="call" class="btn btn-sm qr"><i class="fa fa-phone"></i> Call</a></li>
																		<li><a href="javascript:void(null)" data-tyx="paypal" class="btn btn-sm qr"><i class="fa fa-paypal"></i> PayPal</a></li>
																		<li><a href="javascript:void(null)" data-tyx="vcard" class="btn btn-sm qr"><i class="fa fa-vcard"></i> Contact</a></li>
																		<li><a href="javascript:void(null)" data-tyx="whatsapp" class="btn btn-sm qr"><i class="fa fa-whatsapp"></i> WhatsApp</a></li>
																		<li><a href="javascript:void(null)" data-tyx="facebook" class="btn btn-sm qr"><i class="fa fa-facebook"></i> Facebook</a></li>
																		<li><a href="javascript:void(null)" data-tyx="twitter" class="btn btn-sm qr"><i class="fa fa-twitter"></i> Twitter</a></li>
																		<li><a href="javascript:void(null)" data-tyx="instagram" class="btn btn-sm qr"><i class="fa fa-instagram"></i> Instagram</a></li>
																		<li><a href="javascript:void(null)" data-tyx="youtube" class="btn btn-sm qr"><i class="fa fa-youtube"></i> YouTube</a></li>
																		<li><a href="javascript:void(null)" data-tyx="pinterest" class="btn btn-sm qr"><i class="fa fa-pinterest"></i> Pinterest</a></li>
																		<li><a href="javascript:void(null)" data-tyx="linkedin" class="btn btn-sm qr"><i class="fa fa-linkedin-square"></i> Linked in</a></li>
																	</ul>
																
															</div>
															<div class="prop-card text active">
																<span class="qr-heading">Enter Text</span>
																	<textarea class="form_field qr-text text-qr" placeholder="Write your text here..."></textarea>
																		<span class="errorFly"></span>
																			<span class="muted-text">Scanning the code will show this text</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn text"><i class="fa fa-check"></i> generate</a>
															</div>
															<div class="prop-card link">
																<span class="qr-heading">Enter URL</span>
																	<input type="url" class="form_field fld link-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this link</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card linkedin">
																<span class="qr-heading">Enter Linked in page</span>
																	<input type="url" class="form_field fld link-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this pinterest page or link</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card pinterest">
																<span class="qr-heading">Enter Pinterest URL</span>
																	<input type="url" class="form_field fld link-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this pinterest page or link</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card facebook">
																<span class="qr-heading">Enter Facebook URL</span>
																	<input type="url" class="form_field fld facebook-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this facebook page</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card instagram">
																<span class="qr-heading">Enter Instagram URL</span>
																	<input type="url" class="form_field fld instagram-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this Instagram link or account</span>
																				<br><br><a href="javascript:void(null)"  class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card twitter">
																<span class="qr-heading">Enter Twitter URL</span>
																	<input type="url" class="form_field fld twitter-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this Twitter link or handle</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card youtube">
																<span class="qr-heading">Enter YouTube URL</span>
																	<input type="url" class="form_field fld youtube-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this YouTube link or channel</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card email">
																	<span class="qr-heading">E-mail Content</span>
																	<input type="email" class="form_field mailme email-qr" placeholder="Email Address" />
																		<br>
																	<input type="text" class="form_field mailsubj email-qr" placeholder="Subject of the mail" />
																			<br>
																			<textarea class="form_field mailbdy" placeholder="Message"></textarea>
																			<span class="muted-text">Your QR Code will send this mail</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn mail"><i class="fa fa-check"></i> generate</a>
															
															
															</div>
															<div class="prop-card sms">
																		<span class="qr-heading">SMS (Messaging)</span>
																		<div class="row">
																			<div class="col-sm-12 col-md-5">
																				<select id="phone" name="phone" class="sms prefxx form_field">
																					<?php require("country_phone.php"); ?>
																				</select>
																			</div>
																				<div class="col-sm-12 col-md-7"><input type="tel" placeholder="phone number" class="sms phone form_field"/></div>
																				<div class="col-sm-12 col-md-12">
																					<br>
																						<textarea class="form_field sms msg" placeholder="Message"></textarea>
																				</div>
																		</div>
																			<span class="muted-text">Your QR Code will send this message</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn sms"><i class="fa fa-check"></i> generate</a>
															
															</div>
															
															<div class="prop-card call">
																	<span class="qr-heading">Phone Call</span>
																		<div class="row">
																			<div class="col-sm-12 col-md-5">
																				<select id="phone" name="phone" class="phone prefxx form_field">
																					<?php require("country_phone.php"); ?>
																				</select>
																			</div>
																				<div class="col-sm-12 col-md-7"><input type="tel" placeholder="phone number" class="phone number form_field"/></div>
																				
																		</div>
																			<span class="muted-text">Your QR Code will call this number</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn phone"><i class="fa fa-check"></i> generate</a>
															
															
															</div>
															<div class="prop-card vcard">
																	<span class="qr-heading">Contact Info</span>
																		<div class="row">
																			<div class="col-sm-12 col-md-6"><input type="text" placeholder="First Name" class="vfname form_field"/><br></div>
																				<div class="col-sm-12 col-md-6"><input type="text" placeholder="Last Name" class="vlname form_field"/><br></div>
																				
																				<div class="col-sm-12 col-md-6"><input type="text" placeholder="Phone Number" class="vphone form_field"/><br></div>
																				<div class="col-sm-12 col-md-6"><input type="text" placeholder="Mobile" class="vmobile form_field"/><br></div>
																				<div class="col-sm-12 col-md-6"><input type="email" placeholder="Email Address" class="vemail form_field"/><br></div>
																				<div class="col-sm-12 col-md-6"><input type="text" placeholder="Website Address" class="vwebsite form_field"/><br></div>
																				<div class="col-sm-12 col-md-4"><input type="text" placeholder="City" class="vcity form_field"/><br></div>
																				<div class="col-sm-12 col-md-4"><input type="text" placeholder="Postal Code" class="vpostal form_field"/><br></div>
																				<div class="col-sm-12 col-md-4"><input type="text" placeholder="Country" class="vcountry form_field"/><br></div>
																				<div class="col-sm-12 col-md-12">
																					
																						<textarea class="vaddress form_field" placeholder="Address"></textarea>
																						<br>
																						<textarea class="vcompany form_field" placeholder="Company Name"></textarea><br>
																				</div>
																				<div class="col-sm-12 col-md-6"><input type="text" placeholder="Job Title" class="vjob form_field"/><br></div>
																				<div class="col-sm-12 col-md-6"><input type="text" placeholder="Fax" class="vfax form_field"/><br></div>
																		</div>
																			<span class="muted-text">Your QR Code will save this contact to the phone that scans it.</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn vcard"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card whatsapp">
																<span class="qr-heading">WhatsApp Messaging</span>
																		<div class="row">
																			<div class="col-sm-12 col-md-5">
																				<select id="phone" name="phone" class="whatsapp prefxx form_field">
																					<?php require("country_phone.php"); ?>
																				</select>
																			</div>
																				<div class="col-sm-12 col-md-7"><input type="tel" placeholder="phone number" class="whatsapp phone form_field"/></div>
																				<div class="col-sm-12 col-md-12">
																					<br>
																						<textarea class="whatsapp msg form_field" placeholder="Message"></textarea>
																				</div>
																		</div>
																			<span class="muted-text">Your QR Code will send whatsapp message to this number</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn whatsapp"><i class="fa fa-check"></i> generate</a>
															
															</div>
															<div class="prop-card paypal">
																<span class="qr-heading">Enter Paypal.me link</span>
																	<input type="url" class="form_field fld paypal-qr" placeholder="https://" />
																		<span class="errorFly"></span>
																			<span class="muted-text">Your QR Code will open this paypal.me link for payment</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn llk link"><i class="fa fa-check"></i> generate</a>
															
															</div>
																<div class="prop-card paypal-xtra">
																<span class="qr-heading">PayPal QR Code</span>
																		<div class="row">
																			<div class="col-sm-12 col-md-5">
																				<select id="paypal" name="paypal" class="paypal paytype form_field">
																						<option value="">Payment Type</option>
																					<option>Buy Now</option>
																					<option>Donations</option>
																					<option>Add to cart</option>
																				</select>
																				<br>
																			</div>
																				<div class="col-sm-12 col-md-7"><input type="email" placeholder="Email" class="paypal email form_field"/><br></div>
																				<div class="col-sm-12 col-md-12">
																					<div class="row">
																						<div class="col-sm-12 col-md-6">
																							<input type="text" class="paypal price form_field" placeholder="Price"/>
																							<br>
																						</div>
																						<div class="col-sm-12 col-md-6">
																							<input type="text" class="paypal taxrate form_field" placeholder="Tax Rate (%)"/>
																							<br>
																						</div>
																						<div class="col-sm-12 col-md-6">
																							<input type="text" class="paypal price form_field" placeholder="Shipping"/>
																							<br>
																						</div>
																						<div class="col-sm-12 col-md-6">
																							<select id="paypal" name="paypal" class="paypal currency form_field">
																						<option value="">Currency</option>
																					<option>USD</option>
																					<option>EUR</option>
																					<option>AUD</option>
																					<option>CAD</option>
																					<option>CZK</option>
																					<option>DKK</option>
																					<option>HKD</option>
																					<option>HUF</option>
																					<option>JPY</option>
																					<option>NOK</option>
																					<option>NZD</option>
																					<option>PLN</option>
																					<option>GBP</option>
																					<option>SGD</option>
																					<option>SEK</option>
																					<option>CHF</option>
																				</select>
																					<br>
																						</div>
																						<div class="col-sm-12 col-md-6">
																							<input type="text" class="paypal itemname form_field" placeholder="Item Name"/>
																							<br>
																						</div>
																						<div class="col-sm-12 col-md-6">
																							<input type="text" class="paypal itemid form_field" placeholder="Item ID"/>
																							<br>
																						</div>
																					</div>
																				</div>
																		</div>
																			<span class="muted-text">Your QR Code will generate a PayPal transaction.</span>
																				<br><br><a href="javascript:void(null)" class="btn btn-sm generate-btn whatsapp"><i class="fa fa-check"></i> generate</a>
															
															</div>
														
													</div>
												</div>
												<div class="col-sm-12 col-md-5 text-center">
												
													<div  class="workoutput">
														<div class="processa"><i class="fa fa-spinner fa-spin"></i></div>
														<div id="workoutput"><div>FRAME</div></div>
															<center><a href="javascript:void(null)" class="btn btn-sm downloader"><i class="fa fa-download"></i> download</a></center>
														<div class="download-card download">
														<span class="spanheadb">Download your QR</span><hr>
														<center>
															<input type="text" class="form_field" value="" id="myQRNaem" placeholder="The name of your file..."><br>
															<a href="javascript:void(null)" onclick="pngdung()" class="btn btn-sm download-btn">PNG</a> &nbsp;  &nbsp; 
															<a href="javascript:void(null)" onclick="jpgdung()" class="btn btn-sm download-btn">JPG</a> &nbsp;  &nbsp; 
															<a href="javascript:void(null)" onclick="svgdung()" class="btn btn-sm download-btn">SVG</a> &nbsp;  &nbsp; 
														</center>
													</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>