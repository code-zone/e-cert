			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">{{config('app.name')}}</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/dashboards/dashboard.html" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-dashboard"></i></div>
								<span class="title">Birth Certificates</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="" ><span class="title">Apply </span></a></li>
								<li><a href="../../html/mail/compose.html" ><span class="title">View Certicates</span></a></li>
								<li><a href="../../html/mail/compose.html" ><span class="title">View Applicatons</span></a></li>
							<!--	
							<li><a href="../../html/mail/reply.html" ><span class="title">Reply</span></a></li>
								<li><a href="../../html/mail/message.html" ><span class="title">View message</span></a></li>
								-->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/layouts/builder.html" >
								<div class="gui-icon"><i class="md md-web"></i></div>
								<span class="title">People</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
								<span class="title">Accounting</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/ui/colors.html" ><span class="title">Colors</span></a></li>
								<li><a href="../../html/ui/typography.html" ><span class="title">Typography</span></a></li>
								<li><a href="../../html/ui/cards.html" ><span class="title">Cards</span></a></li>
								<li><a href="../../html/ui/buttons.html" ><span class="title">Buttons</span></a></li>
								<!--end /menu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END UI -->

						<!-- BEGIN TABLES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-table"></i></div>
								<span class="title">Sales</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/tables/static.html" ><span class="title">Static Tables</span></a></li>
								<li><a href="../../html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>
								<li><a href="../../html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END TABLES -->

						<!-- BEGIN FORMS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="fa fa-bar-chart"></span></div>
								<span class="title">Forms</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/forms/basic.html" ><span class="title">Form basic</span></a></li>
								<li><a href="../../html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>
								<li><a href="../../html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
								<li><a href="../../html/forms/editors.html" ><span class="title">Editors</span></a></li>
								<li><a href="../../html/forms/validation.html" ><span class="title">Form validation</span></a></li>
								<li><a href="../../html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN PAGES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-computer"></i></div>
								<span class="title">Pages</span>
							</a>
							<!--start submenu -->
							<ul>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Contacts</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/contacts/search.html" ><span class="title">Search</span></a></li>
										<li><a href="../../html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>
										<li><a href="../../html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Search</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>
										<li><a href="../../html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Blog</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>
										<li><a href="../../html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>
										<li><a href="../../html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Error pages</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/404.html" ><span class="title">404 page</span></a></li>
										<li><a href="../../html/pages/500.html" ><span class="title">500 page</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li><a href="../../html/pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>
								<li><a href="../../html/pages/invoice.html" ><span class="title">Invoice</span></a></li>
								<li><a href="../../html/pages/calendar.html" ><span class="title">Calendar</span></a></li>
								<li><a href="../../html/pages/pricing.html" ><span class="title">Pricing</span></a></li>
								<li><a href="../../html/pages/timeline.html" ><span class="title">Timeline</span></a></li>
								<li><a href="../../html/pages/maps.html" ><span class="title">Maps</span></a></li>
								<li><a href="../../html/pages/locked.html" ><span class="title">Lock screen</span></a></li>
								<li><a href="../../html/pages/login.html" ><span class="title">Login</span></a></li>
								<li><a href="../../html/pages/blank.html" ><span class="title">Blank page</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN CHARTS -->
						<li>
							<a href="../../html/charts/charts.html" >
								<div class="gui-icon"><i class="md md-assessment"></i></div>
								<span class="title">Charts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END CHARTS -->

						<!-- BEGIN LEVELS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
								<span class="title">Menu levels demo</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Open level 2</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="#"><span class="title">Item 2</span></a></li>
										<li class="gui-folder">
											<a href="javascript:void(0);">
												<span class="title">Open level 3</span>
											</a>
											<!--start submenu -->
											<ul>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li class="gui-folder">
													<a href="javascript:void(0);">
														<span class="title">Open level 4</span>
													</a>
													<!--start submenu -->
													<ul>
														<li><a href="#"><span class="title">Item 4</span></a></li>
														<li class="gui-folder">
															<a href="javascript:void(0);">
																<span class="title">Open level 5</span>
															</a>
															<!--start submenu -->
															<ul>
																<li><a href="#"><span class="title">Item 5</span></a></li>
																<li><a href="#"><span class="title">Item 5</span></a></li>
															</ul><!--end /submenu -->
														</li><!--end /submenu-li -->
													</ul><!--end /submenu -->
												</li><!--end /submenu-li -->
											</ul><!--end /submenu -->
										</li><!--end /submenu-li -->
									</ul><!--end /submenu -->
								</li><!--end /submenu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END LEVELS -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; {{date('Y')}}</span> <strong>Eddah Murrey</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->