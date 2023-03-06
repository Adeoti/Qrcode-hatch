$('.btn.generate-btn').on('click', function(){
							$('.processa').fadeIn().delay(1000).fadeOut();
						});
const qrCode = new QRCodeStyling({
						  width: 300,
						  height: 300,
						  data: "qrcode-hatch.com",
						  image: "",
						  dotsOptions: {
							color: "#000",
							type: "classy"
						  },
						  backgroundOptions: {
							color: "#fff",
						  },
						  imageOptions:{
							  hideBackgroundDots:true
						  },
						  cornersSquareOptions: {
									type:"extra-rounded"
								}
						});
						
						var qrAdeName = document.getElementById('myQRNaem');
							
						function pngdung(){
							let belxname = qrAdeName.value;
								if(belxname !=""){belxname = belxname}else{belxname = "qrcode-hatch.com"}
							 qrCode.download({ name: belxname, extension: "png" });
						}function svgdung(){
							let belxname = qrAdeName.value;
							if(belxname !=""){belxname = belxname}else{belxname = "qrcode-hatch.com"}
							 qrCode.download({ name: belxname, extension: "svg" });
						}function jpgdung(){
							let belxname = qrAdeName.value;
								if(belxname !=""){belxname = belxname}else{belxname = "qrcode-hatch.com"}
							 qrCode.download({ name: belxname, extension: "jpeg" });
						}
						
						var qrImage = document.getElementById('qr-logo');
						
						
						const updateQrImg = () => {
					  newQrImage = URL.createObjectURL(qrImage.files[0]);
					  qrCode.update({
						image: newQrImage
					  });
						};
						
						
						$('.btn.generate-btn.text').on('click', function(){
								let newData = $(this).siblings('.qr-text');
									let newText = newData.val();
								if(newText != ""){
										newData.siblings('.errorFly').html("");
										qrCode.update({
										data: newText
									  });
									}else{
										newData.siblings('.errorFly').html('<b class="errorMilk">You will only get the default data generated with empty data</b>');
										qrCode.update({
										data: "QRCode-Hatch.com"
									  });
									}
							});
							
							$('.btn.generate-btn.llk').on('click', function(){
								let newData = $(this).siblings('.fld');
									let newLink = newData.val();
								if(newLink != ""){
										newData.siblings('.errorFly').html("");
										qrCode.update({
										data: newLink
									  });
									}else{
										newData.siblings('.errorFly').html('<b class="errorMilk">You will only get the default data generated with empty data</b>');
										qrCode.update({
										data: "QRCode-Hatch.com"
									  });
									}
							});
								$('.btn.generate-btn.mail').on('click', function(){
								
									let mailme = mailsubj = mailbdy = "";
										mailme = $('.mailme').val();
										mailsubj = $('.mailsubj').val();
										mailbdy = $('.mailbdy').val();
								var mailvala = "";
								if(mailme != "" && mailbdy != "" && mailsubj != ""){
									 mailvala = "MATMSG:TO:"+mailme+";SUB:"+mailsubj+";BODY:"+mailbdy+";";
									//alert(mailvala);
										$(this).siblings('.errorFly').html("");
										qrCode.update({
										data: mailvala
									  });
									}else{
										$(this).siblings('.errorFly').html('<b class="errorMilk">You will only get the default data generated with empty data</b>');
										qrCode.update({
										data: "QRCode-Hatch.com"
									  });
									}
							});
							$('.btn.generate-btn.sms').on('click', function(){
									let prefxx = phone = msg = "";
										prefxx = $('.sms.prefxx').val();
										phoner = $('.sms.phone').val();
										smsmsg = $('.sms.msg').val();
								var msgvala = "";
								if(prefxx != "" && phoner != "" && smsmsg != ""){
									 msgvala = "SMSTO:"+""+prefxx+phoner+":"+smsmsg;
									//alert(msgvala);
										$(this).siblings('.errorFly').html("");
										qrCode.update({
										data: msgvala
									  });
									}else{
										$(this).siblings('.errorFly').html('<b class="errorMilk">You will only get the default data generated with empty data</b>');
										qrCode.update({
										data: "QRCode-Hatch.com"
									  });
									}
							});
						$('.btn.generate-btn.phone').on('click', function(){
									let prefxx = phoner = "";
										prefxx = $('.phone.prefxx').val();
										phoner = $('.phone.number').val();
								var callvala = "";
								if(prefxx != "" && phoner != ""){
									 callvala = "tel:"+""+prefxx+phoner;
										$(this).siblings('.errorFly').html("");
										qrCode.update({
										data: callvala
									  });
									}else{
										$(this).siblings('.errorFly').html('<b class="errorMilk">You will only get the default data generated with empty data</b>');
										qrCode.update({
										data: "QRCode-Hatch.com"
									  });
									}
							});
							$('.btn.generate-btn.whatsapp').on('click', function(){
									let prefxx = phoner = msgwhat = "" ;
										prefxx = $('.whatsapp.prefxx').val();
										phoner = $('.whatsapp.phone').val();
										msgwhat = $('.whatsapp.msg').val();
								var whatsp = "";
								if(prefxx != "" && phoner != "" && msgwhat != ""){
									 whatsp = "wa.me/"+prefxx+phoner+"/?text= "+msgwhat;
									 whatsp = encodeURI(whatsp);
									//alert(msgvala);
										$(this).siblings('.errorFly').html("");
										qrCode.update({
										data: whatsp
									  });
									}else{
										$(this).siblings('.errorFly').html('<b class="errorMilk">You will only get the default data generated with empty data</b>');
										qrCode.update({
										data: "QRCode-Hatch.com"
									  });
									}
							});
						$('.btn.generate-btn.vcard').on('click', function(){
									let vfname = vlname = vphone = vmobile = vjob = vfax = vemail = vwebsite = vcity = vpostal = vcountry = vaddress = vcompany = "" ;
										vfname = $('.vfname').val();
										vlname = $('.vlname').val();
										vphone = $('.vphone').val();
										vmobile = $('.vmobile').val();
										vemail = $('.vemail').val();
										vwebsite = $('.vwebsite').val();
										vcity = $('.vcity').val();
										vjob = $('.vjob').val();
										vfax = $('.vfax').val();
										vpostal = $('.vpostal').val();
										vcountry = $('.vcountry').val();
										vaddress = $('.vaddress').val();
										vcompany = $('.vcompany').val();
								var vconx = "";
								/*vconx = `BEGIN:VCARD VERSION:2.1 N;CHARSET=UTF-8:${vlname};${vfname} FN;CHARSET=UTF-8:${vfname} ${vlname} TEL;CELL:${vmobile} TEL;HOME;VOICE:${vphone} ORG;CHARSET=UTF-8:${vcompany} TITLE;CHARSET=UTF-8:${vjob} TEL;WORK;FAX:${vfax} ADR;CHARSET=UTF-8;WORK;PREF:;;${vaddress};${vcity};${vpostal};${vcountry} URL:${vwebsite} END:VCARD`;
									 */
									 
vconx = `BEGIN:VCARD
N:${vfname};${vlname};
TEL;TYPE=work,VOICE:${vmobile}
TEL;TYPE=home,VOICE:${vphone}
TEL;TYPE=fax:${vfax}
EMAIL:${vemail}
ORG:${vcompany}
TITLE:${vjob}
ADR;TYPE=WORK,PREF:;;${vaddress};${vcity};;${vpostal};${vcountry}
URL:${vwebsite}
VERSION:3.0
END:VCARD`;
									 
									
										if(vfname != "" && vlname !=""){
											qrCode.update({
										data: vconx
									  });
										}else{
											$(this).siblings('.errorFly').html(vconx);
											qrCode.update({
										data: "QRCode-Hatch.com"
									  });
										}
									
										
										
									
							});
						
						
						
						$('.qr-height').on('change', function(){
							let qrheight = $(this).val();
							let htstatus = $('.heightstatus');
							qrCode.update({
								height: qrheight
							  });
							htstatus.text(qrheight);
						});
						$('.qr-width').on('change', function(){
							let qrwidth = $(this).val();
							let wdstatus = $('.widthstatus');
							qrCode.update({
								width: qrwidth
							  });
							wdstatus.text(qrwidth);
						});
						$('.qr-dots').on('change', function(){
							let theDot = $(this).val();
							qrCode.update({
								dotsOptions: {
									type: theDot
								}
							  });
						});
						$('.qr-front-color').on('change', function(){
							let fcolor = $(this).val();
								qrCode.update({
								dotsOptions: {
									color:fcolor
								}
							  });
						});
						$('.qr-back-color').on('change', function(){
							let bcolor = $(this).val();
								qrCode.update({
								backgroundOptions: {
									color:bcolor
								}
							  });
						});
						$('.qr-eye-color').on('change', function(){
							let eyecolor = $(this).val();
								qrCode.update({
								cornersDotOptions: {
									color:eyecolor
								}
							  });
						});
						$('.qr-eye').on('change', function(){
							let eyeT = $(this).val();
								qrCode.update({
								cornersDotOptions: {
									type:eyeT
								}
							  });
						});
						$('.qr-area-color').on('change', function(){
							let areacolor = $(this).val();
								qrCode.update({
								cornersSquareOptions: {
									color:areacolor
								}
							  });
						});
						$('.qr-area').on('change', function(){
							let areaT = $(this).val();
								qrCode.update({
								cornersSquareOptions: {
									type:areaT
								}
							  });
						});
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						qrCode.append(document.getElementById("workoutput"));
						
						
						$('a.btn.downloader').on('click', function(){
							$('.download-card').slideToggle();
						});
						