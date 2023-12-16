<!-- Contact Modal -->
<div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
		<div class="lqd-modal-inner">
			<div class="lqd-modal-head"></div>
			<section class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-no-repeat"
				style="background-image: url(./assets/images/common/modal-bg.jpeg);">
				<div class="container p-0">
					<div class="row m-0 min-h-100vh items-center">
						<div class="w-55percent py-10 pr-100 pl-10 sm:w-full module-content">
							<div class="ld-fancy-heading">
								<h2 class="ld-fh-element text-120 mb-0/5em leading-0/8em font-medium text-black">Send a
									<span>message.</span></h2>
							</div>
							<div class="ld-fancy-heading">
								<p class="ld-fh-element mb-0/5em">We're here to answer any question you may have.</p>
							</div>
							<div class="spacer w-full sm:hidden">
								<div class="w-full h-140"></div>
							</div>
							<div class="w-full flex flex-wrap">
								<div class="w-50percent flex flex-col sm:w-full">
									<div class="ld-fancy-heading relative mb-10">
										<h6
											class="ld-fh-element inline-block relative text-13 text-black font-bold mb-0/5em tracking-0/1em">
											Tour & Queries</h6>
									</div>
									<div class="ld-fancy-heading relative mb-10">
										<p class="ld-fh-element inline-block relative text-16 leading-1/2em mb-0/5em">
											Would you like to contact our team?</p>
									</div>
									<div class="ld-fancy-heading relative">
										<p
											class="ld-fh-element mb-0/5em inline-block relative text-16 font-bold text-black leading-1/2em">
											md@tlltourism.com </p>
									</div>
								</div>
								<div class="w-50percent flex flex-col pl-15 sm:w-full sm:pl-0">
									<div class="ld-fancy-heading relative mb-10">
										<h6
											class="ld-fh-element inline-block relative text-13 text-black font-bold mb-0/5em tracking-0/1em">
											Visa & Passport</h6>
									</div>
									<div class="ld-fancy-heading relative mb-10">
										<p class="ld-fh-element inline-block relative text-16 leading-1/2em mb-0/5em">
											Clear all your doubts from our experts</p>
									</div>
									<div class="ld-fancy-heading relative">
										<p
											class="ld-fh-element mb-0/5em inline-block relative text-16 font-bold text-black leading-1/2em">
											visa@tlltourism.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="w-45percent p-10 sm:w-full">
							<div
								class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block">
								<div role="form">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
									</div>
									<form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
										novalidate="novalidate" data-status="init">
										<div class="row -mr-15 -ml-15">
											<div class="col col-12 col-md-6 px-15">
												<p class="m-0 text-black-30 text-12">Your name</p>
												<p>
													<span class="lqd-form-control-wrap text">
														<input
															class="bg-transparent border-black-10 text-black text-14 font-normal"
															type="text" name="name" value="" size="40"
															aria-required="true" aria-invalid="false"
															placeholder="Full name">
													</span>
												</p>
											</div>
											<div class="col col-12 col-md-6 px-15">
												<p class="m-0 text-black-30 text-12">Email address</p>
												<p>
													<span class="lqd-form-control-wrap email">
														<input
															class="bg-transparent border-black-10 text-black text-14 font-normal"
															type="email" name="email" value="" size="40"
															aria-required="true" aria-invalid="false"
															placeholder="Email Address">
													</span>
												</p>
											</div>
											<div class="col col-12 col-md-6 px-15">
												<p class="m-0 text-black-30 text-12">Mobile</p>
												<p>
													<span class="lqd-form-control-wrap tel">
														<input
															class="bg-transparent border-black-10 text-black text-14 font-normal"
															type="tel" name="tel" value="" size="40"
															aria-invalid="false" placeholder="Phone number">
													</span>
												</p>
											</div>
											<div class="col col-12 col-md-6 px-15">
												<p class="m-0 text-black-30 text-12">Subject</p>
												<p>
													<span class="lqd-form-control-wrap text">
														<input
															class="bg-transparent border-black-10 text-black text-14 font-normal"
															type="text" name="project-name" value="" size="40"
															aria-required="true" aria-invalid="false"
															placeholder="Subject">
													</span>
												</p>
											</div>
											<div class="col col-12 px-15">
												<p class="m-0 text-black-30 text-12">Your message</p>
												<p>
													<span class="lqd-form-control-wrap textarea">
														<textarea
															class="bg-transparent border-black-10 text-black text-14 font-normal"
															name="message" cols="10" rows="4" aria-required="true"
															aria-invalid="false"
															placeholder="Tell us about your query"></textarea>
													</span>
												</p>
											</div>
											<div class="col col-12 px-15">
												<span class="lqd-form-control-wrap acceptance">
													<span class="lqd-cf-form-control lqd-cf-acceptance">
														<span class="lqd-cf-list-item">
															<label>
																<input type="checkbox" name="acceptance" value="1"
																	aria-invalid="false">
																<span class="lqd-cf-list-item-label">I am bound by the
																	terms of the Service I accept Privacy Policy</span>
															</label>
														</span>
													</span>
												</span>
											</div>
											<div class="col col-12 px-15">
												<input type="submit" value="Send message"
													class="lqd-cf-form-control lqd-cf-submit border-none text-white bg-primary hover:bg-primary">
											</div>
										</div>
									</form>
									<div class="lqd-cf-response-output"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="lqd-modal-foot"></div>
		</div>
	</div>
	<!-- Contact Modal -->