﻿@extends('layouts.app')
@section('content')
@include('partial.sidebar')
<!-- Add New Section Start -->
<div class="modal fade" id="add_section_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">New Section</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="new-section-block">
					<div class="row">
						<div class="col-md-12">
							<div class="new-section">
								<div class="form_group">
									<label class="label25">Section Name*</label>
									<input class="form_input_1" type="text" placeholder="Section title here">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="main-btn cancel" data-bs-dismiss="modal">Close</button>
				<button type="button" class="main-btn">Add Section</button>
			</div>
		</div>
	</div>
</div>
<!-- Add New Section End -->
<!-- Add Lecture Start -->
<div class="modal fade" id="add_lecture_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">Add Lecture</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="new-section-block">
					<div class="row">
						<div class="col-md-12">
							<div class="course-main-tabs">
								<div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
									<a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" href="#nav-basic" role="tab" aria-selected="true"><i class="fas fa-file-alt me-2"></i>Basic</a>
									<a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#nav-video" role="tab" aria-selected="false"><i class="fas fa-video me-2"></i>Video</a>
									<a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#nav-attachment" role="tab" aria-selected="false"><i class="fas fa-paperclip me-2"></i>Attachments</a>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="nav-basic" role="tabpanel">
										<div class="new-section mt-30">
											<div class="form_group">
												<label class="label25">Lecture Title*</label>
												<input class="form_input_1" type="text" placeholder="Title here">
											</div>
										</div>
										<div class="ui search focus lbel25 mt-30">	
											<label>Description*</label>
											<div class="text-editor">			
												<div id="editor2"></div>
											</div>
										</div>
										<div class="preview-dt">
											<span class="title-875">Free Preview</span>
											<label class="switch">
												<input type="checkbox" name="preview_op" value="">
												<span></span>
											</label>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-video" role="tabpanel">
										<div class="lecture-video-dt mt-30">
											<span class="video-info">Select your preferred video type. (.mp4, YouTube, Vimeo etc.)</span>
											<div class="video-category">
												<label ><input type="radio" name="colorRadio" value="mp4" checked><span>HTML5(mp4)</span></label>
												<label><input type="radio" name="colorRadio" value="url"><span>External URL</span></label>
												<label><input type="radio" name="colorRadio" value="youtube"><span>YouTube</span></label>
												<label><input type="radio" name="colorRadio" value="vimeo"><span>Vimeo</span></label>
												<label><input type="radio" name="colorRadio" value="embedded"><span>embedded</span></label>
												<div class="mp4 video-box" style="display: block;">
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="upload-file-dt mt-30">
																<div class="upload-btn">													
																	<input class="uploadBtn-main-input" type="file" id="VideoFile__input--source">
																	<label for="VideoFile__input--source" title="Zip">Upload Video</label>
																</div>
																<span class="uploadBtn-main-file">File Format: .mp4</span>
																<span class="uploaded-id">Uploaded ID : <b>12</b></span>
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="upload-file-dt mt-30">
																<div class="upload-btn">													
																	<input class="uploadBtn-main-input" type="file" id="PosterFile__input--source">
																	<label for="PosterFile__input--source" title="Zip">Video Poster</label>
																</div>
																<span class="uploadBtn-main-file color-b">Uploaded ID : preview.jpg</span>
																<span class="uploaded-id color-fmt">Size: 590x300 pixels. Supports: jpg,jpeg, or png</span>
															</div>
														</div>
													</div>
													<div class="video-duration">
														<label class="label25">Video Runtime - <strong>hh:mm:ss</strong>*</label>
														<div class="duration-time">
															<div class="input-group">
																<input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
																<input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
																<input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
															</div>
														</div>
													</div>
												</div>
												<div class="url video-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>External URL*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="External Video URL" name="" id="" value="">															
															</div>
														</div>
													</div>
													<div class="video-duration">
														<label class="label25">Video Runtime - <strong>hh:mm:ss</strong>*</label>
														<div class="duration-time">
															<div class="input-group">
																<input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
																<input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
																<input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
															</div>
														</div>
													</div>
												</div>
												<div class="youtube video-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>Youtube URL*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Youtube Video URL" name="" id="" value="">															
															</div>
														</div>
													</div>
													<div class="video-duration">
														<label class="label25">Video Runtime - <strong>hh:mm:ss</strong>*</label>
														<div class="duration-time">
															<div class="input-group">
																<input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
																<input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
																<input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
															</div>
														</div>
													</div>
												</div>
												<div class="vimeo video-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>Vimeo URL*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Vimeo Video URL" name="" id="" value="">															
															</div>
														</div>
													</div>
													<div class="video-duration">
														<label class="label25">Video Runtime - <strong>hh:mm:ss</strong>*</label>
														<div class="duration-time">
															<div class="input-group">
																<input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
																<input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
																<input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
															</div>
														</div>
													</div>
												</div>
												<div class="embedded video-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>Embedded Code*</label>
															<div class="ui form swdh30">
																<div class="field">
																	<textarea rows="3" name="" id="" placeholder="Place your embedded code here"></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="video-duration">
														<label class="label25">Video Runtime - <strong>hh:mm:ss</strong>*</label>
														<div class="duration-time">
															<div class="input-group">
																<input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
																<input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
																<input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-attachment" role="tabpanel">
										<div class="row">
											<div class="col-lg-12">
												<div class="upload-file-dt mt-30">
													<div class="upload-btn">													
														<input class="uploadBtn-main-input" type="file" id="SourceFile__input--source">
														<label for="SourceFile__input--source" title="Zip"><i class="far fa-plus-square me-2"></i>Attachment</label>
													</div>
													<span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf or .zip</span>
													<div class="add-attachments-dt">
														<div class="attachment-items">
															<div class="attachment_id">Uploaded ID: 12</div>
															<button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
														</div>
														<div class="attachment-items">
															<div class="attachment_id">Uploaded ID: 13</div>
															<button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
														</div>
														<div class="attachment-items">
															<div class="attachment_id">Uploaded ID: 14</div>
															<button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="main-btn cancel" data-bs-dismiss="modal">Close</button>
				<button type="button" class="main-btn">Add Lecture</button>
			</div>
		</div>
	</div>
</div>
<!-- Add Lecture End -->
<!-- Add Quiz Start -->
<div class="modal fade" id="add_quiz_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">Add Quiz</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="new-section-block">
					<div class="row">
						<div class="col-md-12">
							<div class="course-main-tabs">
								<div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
									<a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" href="#nav-quizbasic" role="tab" aria-selected="true"><i class="fas fa-file-alt me-2"></i>Basic</a>
									<a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#nav-questions" role="tab" aria-selected="false"><i class="fas fa-question-circle me-2"></i>Questions</a>
									<a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#nav-setting" role="tab" aria-selected="false"><i class="fas fa-cog me-2"></i>Setting</a>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="nav-quizbasic" role="tabpanel">
										<div class="new-section">
											<div class="form_group mt-30">
												<label class="label25">Quiz Title*</label>
												<input class="form_input_1" type="text" placeholder="Title here">
											</div>
										</div>
										<div class="ui search focus lbel25 mt-30">	
											<label>Description*</label>
											<div class="text-editor">			
												<div id="editor3"></div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-questions" role="tabpanel">
										<div class="lecture-video-dt mt-30">
											<div class="add-ques-dt">
												<button type="button" class="main-btn color btn-hover w-100" data-bs-toggle="collapse" data-bs-target="#add-ques"><i class="far fa-plus-square me-2"></i>Add Question</button>
												<div id="add-ques" class="collapse">
													<div class="lecture-video-dt mt-30">
														<span class="video-info">Question Type</span>
														<div class="video-category">
															<label ><input type="radio" name="colorRadio" value="schoice"><span><i class="far fa-dot-circle me-2"></i>Single Choice</span></label>
															<label><input type="radio" name="colorRadio" value="mchoice"><span><i class="far fa-check-circle me-2"></i>Multiple Choice</span></label>
															<label><input type="radio" name="colorRadio" value="sline"><span><i class="far fa-edit me-2"></i>Single Line Text</span></label>
															<label><input type="radio" name="colorRadio" value="mline"><span><i class="far fa-file-alt me-2"></i>Milti Line Text</span></label>
															<div class="schoice quiz-box">
																<div class="ques-box">
																	<div class="row">
																		<div class="col-lg-2 col-md-2">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Image*</label>
																				<div class="upload-thumb">													
																					<input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source">
																					<label class="mx-0 my-0"  for="thumbnail_source" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
																				</div>
																			</div>
																		</div>																		
																		<div class="col-lg-7 col-md-9">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Question Title*</label>
																				<input class="form_input_1" type="text" placeholder="Write question title">
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-12">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Score*</label>
																				<input class="form_input_1" type="number" placeholder="Score">
																			</div>
																		</div>																		
																	</div>
																</div>
																<div class="ans-box">
																	<div class="row">																		
																		<div class="col-lg-12 col-md-12">
																			<button class="main-btn color btn-hover mt-30">Add Option</button>
																		</div>
																		<div class="col-lg-12 col-md-12">
																			<div class="option-item">
																				<div class="opt-title">
																					<h4>1. Option</h4>
																					<span class="opt-del"><i class="fas fa-trash-alt"></i></span>
																				</div>
																				<div class="option-wrap">
																					<div class="form_group">
																						<label class="label25 text-left">Option Title*</label>
																						<input class="form_input_1" type="text" placeholder="Option title">
																					</div>																		
																					<div class="agree_checkbox">
																						<input type="checkbox" id="check1">
																						<label for="check1">Correct answer</label>
																					</div>																	
																				</div>																	
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="mchoice quiz-box">
																<div class="ques-box">
																	<div class="row">
																		<div class="col-lg-2 col-md-2">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Image*</label>
																				<div class="upload-thumb">													
																					<input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source1">
																					<label class="mx-0 my-0"  for="thumbnail_source1" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
																				</div>
																			</div>
																		</div>																		
																		<div class="col-lg-7 col-md-9">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Question Title*</label>
																				<input class="form_input_1" type="text" placeholder="Write question title">
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-12">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Score*</label>
																				<input class="form_input_1" type="number" placeholder="Score">
																			</div>
																		</div>																		
																	</div>
																</div>
																<div class="ans-box">
																	<div class="row">																		
																		<div class="col-lg-12 col-md-12">
																			<button class="main-btn color btn-hover mt-30">Add Option</button>
																		</div>
																		<div class="col-lg-12 col-md-12">
																			<div class="option-item">
																				<div class="opt-title">
																					<h4>1. Option</h4>
																					<span class="opt-del"><i class="fas fa-trash-alt"></i></span>
																				</div>
																				<div class="option-wrap">
																					<div class="form_group">
																						<label class="label25 text-left">Option Title*</label>
																						<input class="form_input_1" type="text" placeholder="Option title">
																					</div>																		
																					<div class="agree_checkbox">
																						<input type="checkbox" id="check2">
																						<label for="check2">Correct answer</label>
																					</div>																	
																				</div>																	
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sline quiz-box">
																<div class="ques-box">
																	<div class="row">
																		<div class="col-lg-2 col-md-2">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Image*</label>
																				<div class="upload-thumb">													
																					<input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source2">
																					<label class="mx-0 my-0"  for="thumbnail_source2" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
																				</div>
																			</div>
																		</div>																		
																		<div class="col-lg-7 col-md-9">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Question Title*</label>
																				<input class="form_input_1" type="text" placeholder="Write question title">
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-12">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Score*</label>
																				<input class="form_input_1" type="number" placeholder="Score">
																			</div>
																		</div>																		
																	</div>
																</div>
															</div>
															<div class="mline quiz-box">
																<div class="ques-box">
																	<div class="row">
																		<div class="col-lg-2 col-md-2">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Image*</label>
																				<div class="upload-thumb">													
																					<input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source3">
																					<label class="mx-0 my-0"  for="thumbnail_source3" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
																				</div>
																			</div>
																		</div>																		
																		<div class="col-lg-7 col-md-9">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Question Title*</label>
																				<input class="form_input_1" type="text" placeholder="Write question title">
																			</div>
																		</div>
																		<div class="col-lg-3 col-md-12">
																			<div class="form_group mt-30">
																				<label class="label25 text-left">Score*</label>
																				<input class="form_input_1" type="number" placeholder="Score">
																			</div>
																		</div>																		
																	</div>
																</div>																
															</div>																
														</div>
													</div>
													<div class="share-submit-btns ps-0 pb-0">
														<button class="main-btn color btn-hover"><i class="fas fa-save me-2"></i>Save Question</button>
													</div>
												</div>
												<div class="added-ques">
													<div class="section-group-list ps-0 pe-0 sortable">
														<div class="section-list-item">
															<div class="section-item-title">
																<i class="far fa-dot-circle me-2"></i>
																<span class="section-item-title-text">Question Title</span>
															</div>
															<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
															<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
															<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
														</div>
														<div class="section-list-item">
															<div class="section-item-title">
																<i class="far fa-check-circle me-2"></i>
																<span class="section-item-title-text">Question Title</span>
															</div>
															<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
															<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
															<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
														</div>
														<div class="section-list-item">
															<div class="section-item-title">
																<i class="far fa-edit me-2"></i>
																<span class="section-item-title-text">Question Title</span>
															</div>
															<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
															<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
															<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
														</div>
														<div class="section-list-item">
															<div class="section-item-title">
																<i class="far fa-file-alt me-2"></i>
																<span class="section-item-title-text">Question Title</span>
															</div>
															<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
															<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
															<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-setting" role="tabpanel">
										<div class="new-section mt-30">
											<div class="quiz-cogs-step">
												<label class="label25 quiz-st-ft text-left">Gradable</label>
												<div class="cogs-toggle">
													<label class="switch">
														<input type="checkbox" id="gradable_quiz" value="">
														<span></span>
													</label>
													<label for="gradable_quiz" class="lbl-quiz">Quiz Gradable</label>
												</div>
												<p>If this quiz test affect on the students grading system for this course.</p>
											</div>
											<div class="quiz-cogs-step mt-30">
												<label class="label25 quiz-st-ft text-left">Remaining time display</label>
												<div class="cogs-toggle">
													<label class="switch">
														<input type="checkbox" id="show_time" value="">
														<span></span>
													</label>
													<label for="show_time" class="lbl-quiz">Show Time</label>
												</div>
												<p>By enabling this option, quiz taker will show remaining time during attempt.</p>
											</div>
											<div class="row">
												<div class="col-lg-4">
													<div class="form_group mt-30">
														<label class="label25">Time Limit*</label>
														<div class="input-group">
															<input class="form_input_1 white-bg" type="number" placeholder="">
															<div class="input-group-append">
																<span class="input-group-text int4856">Minutes</span>
															</div>
															<span class="alt-text">Set zero to disable time limit.</span>
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form_group mt-30">
														<label class="label25">Passing Score(%)*</label>
														<input class="form_input_1" type="number" placeholder="">
														<span class="alt-text">Student have to collect this score in percent for the pass this quiz.</span>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form_group mt-30">
														<label class="label25">Questions Limit*</label>
														<input class="form_input_1" type="number" placeholder="">
														<span class="alt-text">The number of questions student have to answer in this quiz.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="main-btn cancel" data-bs-dismiss="modal">Close</button>
				<button type="button" class="main-btn">Add Quiz</button>
			</div>
		</div>
	</div>
</div>
<!-- Add Quiz End -->
<!-- Add Assignment Start -->
<div class="modal fade" id="add_assignment_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lectureModalLabel">Add Assignment</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="new-section-block main-form">
					<div class="row">
						<div class="col-md-12">
							<div class="new-section">
								<div class="form_group">
									<label class="label25">Assignment Title*</label>
									<input class="form_input_1" type="text" placeholder="Assignment title here">
								</div>
								<div class="form_group mt-30">				
									<label class="label25">Description*</label>
									<div class="text-editor">			
										<div id="editor4"></div>
									</div>
								</div>
								<div class="form_group mt-30">				
									<div class="row g-4">				
										<div class="col-lg-4 mt-30">				
											<label class="label25">Time Duration*</label>
											<div class="row no-gutters">
												<div class="col-6">
													<input class="form_input_1" type="number" value="0" placeholder="">
												</div>
												<div class="col-6 pl-2">
													<select class="ui hj145 dropdown cntry152 assignment prompt srch_explore">
														<option value="">Select</option>
														<option>Weeks</option>															
														<option>Days</option>
														<option>Hours</option>	
													</select>
												</div>
											</div>
											<span class="alt-text">Assignment time duration, set 0 for no limit.</span>
										</div>
										<div class="col-lg-4 mt-30">				
											<label class="label25">Total Number*</label>
											<input class="form_input_1" type="number" value="10" placeholder="">
											<span class="alt-text">Maximum points a student can score</span>
										</div>
										<div class="col-lg-4 mt-30">				
											<label class="label25">Minimum Pass Number*</label>
											<input class="form_input_1" type="number" value="5" placeholder="">
											<span class="alt-text">Minimum points required for the student to pass this assignment.</span>
										</div>
									</div>
								</div>
								<div class="assgn152 mt-30 pt-30">
									<div class="row g-6">				
										<div class="col-lg-6 mt-30">
											<label class="label25">Upload attachment limit*</label>
											<input class="form_input_1" type="text" value="1" placeholder="">
											<span class="alt-text">Maximum attachment size limit</span>
										</div>
										<div class="col-lg-6 mt-30">
											<label class="label25">Maximum attachment size limit</label>
											<input class="form_input_1" type="text" value="10" placeholder="">
											<span class="alt-text">Define maximum attachment size in MB</span>
										</div>
									</div>
								</div>
								<div class="upload-file-dt mt-30">
									<div class="upload-btn">													
										<input class="uploadBtn-main-input" type="file" id="AssignmentFile__input--source">
										<label for="AssignmentFile__input--source" title="Zip"><i class="far fa-plus-square me-2"></i>Attachment</label>
									</div>
									<span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf or .zip</span>
									<div class="add-attachments-dt">
										<div class="attachment-items">
											<div class="attachment_id">Uploaded ID: 5</div>
											<button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
										</div>
										<div class="attachment-items">
											<div class="attachment_id">Uploaded ID: 6</div>
											<button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
										</div>											
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="main-btn cancel" data-bs-dismiss="modal">Close</button>
				<button type="button" class="main-btn">Add Assignment</button>
			</div>
		</div>
	</div>
</div>
<!-- Add Assignment End -->
<!-- Header Start -->
<header class="header clearfix">
	<button type="button" id="toggleMenu" class="toggle_menu">
	  <i class='uil uil-bars'></i>
	</button>
	<button id="collapse_menu" class="collapse_menu">
		<i class="uil uil-bars collapse_menu--icon "></i>
		<span class="collapse_menu--label"></span>
	</button>
	<div class="main_logo" id="logo">
		<a href="index.html"><img src="images/logo.svg" alt=""></a>
		<a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
	</div>
	<div class="search120">
		<div class="ui search">
		  <div class="ui left icon input swdh10">
			<input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
			<i class='uil uil-search-alt icon icon1'></i>
		  </div>
		</div>
	</div>
	<div class="header_right">
		<ul>
			@include('partial.course-category-button')
			<li>
				<a href="shopping_cart.html" class="option_links" title="cart"><i class='uil uil-shopping-cart-alt'></i><span class="noti_count">2</span></a>
			</li>
			<li class="dropdown-msg">
				<a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
				<div class="dropdown-menu dropdown_ms drop-down">
					<a href="#" class="channel_my item">
						<div class="profile_link">
							<img src="images/left-imgs/img-6.jpg" alt="">
							<div class="pd_content">
								<h6>Zoena Singh</h6>
								<p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
								<span class="nm_time">2 min ago</span>
							</div>							
						</div>							
					</a>
					<a href="#" class="channel_my item">
						<div class="profile_link">
							<img src="images/left-imgs/img-5.jpg" alt="">
							<div class="pd_content">
								<h6>Joy Dua</h6>
								<p>Hello, I paid you video tutorial but did not play error 404.</p>
								<span class="nm_time">10 min ago</span>
							</div>							
						</div>							
					</a>
					<a href="#" class="channel_my item">
						<div class="profile_link">
							<img src="images/left-imgs/img-8.jpg" alt="">
							<div class="pd_content">
								<h6>Jass</h6>
								<p>Thanks Sir, Such a nice video.</p>
								<span class="nm_time">25 min ago</span>
							</div>							
						</div>							
					</a>
					<a class="vbm_btn" href="instructor_messages.html">View All <i class='uil uil-arrow-right'></i></a>
				</div>
			</li>
			<li class="dropdown-noti">
				<a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
				<div class="dropdown-menu dropdown_mn drop-down">
					<a href="#" class="channel_my item">
						<div class="profile_link">
							<img src="images/left-imgs/img-1.jpg" alt="">
							<div class="pd_content">
								<h6>Rock William</h6>
								<p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
								<span class="nm_time">2 min ago</span>
							</div>							
						</div>							
					</a>
					<a href="#" class="channel_my item">
						<div class="profile_link">
							<img src="images/left-imgs/img-2.jpg" alt="">
							<div class="pd_content">
								<h6>Jassica Smith</h6>
								<p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
								<span class="nm_time">12 min ago</span>
							</div>							
						</div>							
					</a>
					<a href="#" class="channel_my item">
						<div class="profile_link">
							<img src="images/left-imgs/img-9.jpg" alt="">
							<div class="pd_content">
								<p> Your Membership Approved <strong>Upload Video</strong>.</p>
								<span class="nm_time">20 min ago</span>
							</div>							
						</div>							
					</a>
					<a class="vbm_btn" href="instructor_notifications.html">View All <i class='uil uil-arrow-right'></i></a>
				</div>
			</li>
			<li class="profile-dropdown">
				<a href="#" class="opts_account" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
					<img src="images/hd_dp.jpg" alt="">
				</a>
				<div class="dropdown-menu dropdown_account drop-down dropdown-menu-end">
					<div class="channel_my">
						<div class="profile_link">
							<img src="images/hd_dp.jpg" alt="">
							<div class="pd_content">
								<div class="rhte85">
									<h6>Joginder Singh</h6>
									<div class="mef78" title="Verify">
										<i class='uil uil-check-circle'></i>
									</div>
								</div>
								<span>gambol943@gmail.com</span>
							</div>							
						</div>
						<a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>						
					</div>
					<div class="night_mode_switch__btn">
						<a href="#" id="night-mode" class="btn-night-mode">
							<i class="uil uil-moon"></i> Night mode
							<span class="btn-night-mode-switch">
								<span class="uk-switch-button"></span>
							</span>
						</a>
					</div>
					<a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>						
					<a href="membership.html" class="item channel_item">Paid Memberships</a>
					<a href="setting.html" class="item channel_item">Setting</a>
					<a href="help.html" class="item channel_item">Help</a>
					<a href="feedback.html" class="item channel_item">Send Feedback</a>
					<a href="sign_in.html" class="item channel_item">Sign Out</a>
				</div>
			</li>
		</ul>
	</div>
</header>
<!-- Header End -->

<!-- Body Start -->
<div class="wrapper">
	<div class="sa4d25">
		<div class="container">			
			<div class="row">
				<div class="col-lg-12">	
					<h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
				</div>					
			</div>				
			<div class="row">
				<div class="col-12">
					<div class="course_tabs_1">
						<div id="add-course-tab" class="step-app">
							<ul class="step-steps">
								<li class="active">
									<a href="#tab_step1">
										<span class="number"></span>
										<span class="step-name">Basic</span>
									</a>
								</li>
								<li>
									<a href="#tab_step2">
										<span class="number"></span>
										<span class="step-name">Curriculum</span>
									</a>
								</li>
								<li>
									<a href="#tab_step3">
										<span class="number"></span>
										<span class="step-name">Media</span>
									</a>
								</li>
								<li>
									<a href="#tab_step4">
										<span class="number"></span>
										<span class="step-name">Price</span>
									</a>
								</li>
								<li>
									<a href="#tab_step5">
										<span class="number"></span>
										<span class="step-name">Publish</span>
									</a>
								</li>
							</ul>
							<div class="step-content">
								<div class="step-tab-panel step-tab-info active" id="tab_step1"> 
									<div class="tab-from-content">
										<div class="title-icon">
											<h3 class="title"><i class="uil uil-info-circle"></i>Basic Information</h3>
										</div>
										<div class="course__form">
											<div class="general_info10">
												<div class="row">
													<div class="col-lg-12 col-md-12">															
														<div class="ui search focus mt-30 lbel25">
															<label>Course Title*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Course title here" name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
																<div class="badge_num">60</div>
															</div>
															<div class="help-block">(Please make this a maximum of 100 characters and unique.)</div>
														</div>									
													</div>
													<div class="col-lg-12 col-md-12">															
														<div class="ui search focus lbel25 mt-30">	
															<label>Short Description*</label>
															<div class="ui form swdh30">
																<div class="field">
																	<textarea rows="3" name="description" id="" placeholder="Item description here..."></textarea>
																</div>
															</div>
															<div class="help-block">220 words</div>
														</div>								
													</div>
													<div class="col-lg-12 col-md-12">
														<div class="course_des_textarea mt-30 lbel25">
															<label>Course Description*</label>
															<div class="text-editor">
																<textarea class="form_textarea_1 ht-4" placeholder="Item description here" style="display:none;"></textarea>
																<div id="editor1"></div>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-12">															
														<div class="ui search focus lbel25 mt-30">	
															<label>What will students learn in your course?*</label>
															<div class="ui form swdh30">
																<div class="field">
																	<textarea rows="3" name="description" id="" placeholder=""></textarea>
																</div>
															</div>
															<div class="help-block">Student will gain this skills, knowledge after completing this course. (One per line).</div>
														</div>								
													</div>
													<div class="col-lg-6 col-md-12">															
														<div class="ui search focus lbel25 mt-30">	
															<label>Requirements*</label>
															<div class="ui form swdh30">
																<div class="field">
																	<textarea rows="3" name="description" id="" placeholder=""></textarea>
																</div>
															</div>
															<div class="help-block">What knowledge, technology, tools required by users to start this course. (One per line).</div>
														</div>								
													</div>
													<div class="col-lg-6 col-md-12">
														<div class="mt-30 lbel25">
															<label>Course Level*</label>
														</div>
														<select class="selectpicker"  multiple data-selected-text-format="count > 3">
															<option value="1">Beginner</option>
															<option value="2">Intermediate</option>
															<option value="3">Expert</option>
														</select>
													</div>
													<div class="col-lg-6 col-md-12">
														<div class="mt-30 lbel25">
															<label>Audio Language*</label>
														</div>
														<select class="selectpicker" title="Select Audio" multiple data-selected-text-format="count > 4" data-size="5">
															<option>English</option>															
															<option>Español</option>
															<option>Português</option>
															<option>日本語</option>
															<option>Deutsch</option>
															<option>Français</option>
															<option>Türkçe</option>
															<option>Italiano</option>
															<option>हिन्दी</option>
															<option>Polski</option>
															<option>Tamil</option>
															<option>मराठी</option>
															<option>Telugu</option>														
															<option>Română</option>														
														</select>
													</div>
													<div class="col-lg-6 col-md-6">
														<div class="mt-30 lbel25">
															<label>Close Caption*</label>
														</div>
														<select class="selectpicker" title="Select Caption" multiple data-selected-text-format="count > 4" data-size="5">
															<option>English</option>															
															<option>Español</option>
															<option>Português</option>
															<option>Italiano</option>
															<option>Français</option>
															<option>Polski</option>
															<option>Deutsch</option>
															<option>Bahasa Indonesia</option>
															<option>ภาษาไทย</option>
															<option>हिन्दी</option>
															<option>Tamil</option>
															<option>मराठी</option>
															<option>Telugu</option>														
														</select>
													</div>
													<div class="col-lg-6 col-md-6">
														<div class="mt-30 lbel25">
															<label>Course Category*</label>
														</div>
														<select class="selectpicker" title="Select Category" name="selectcategory" id="selectcategory" data-live-search="true">
															<optgroup label="Development">
																<option value="1">Web Development</option>
																<option value="2">Data Science</option>
																<option value="3">Programming Languages</option>
																<option value="4">Mobile Apps</option>
																<option value="5">Game Development</option>
																<option value="6">Databases</option>
																<option value="7">Software Testing</option>
																<option value="8">Software Engineering</option>
																<option value="9">Development Tools</option>
																<option value="10">E-Commerce</option>
															</optgroup>
															<optgroup label="Business">
																<option value="11">Finance</option>
																<option value="12">Entrepreneurship</option>
																<option value="13">Communications</option>
																<option value="14">Management</option>
																<option value="15">Sales</option>
																<option value="16">Strategy</option>
																<option value="17">Operations</option>
																<option value="18">Project Management</option>
																<option value="19">Business Law</option>
																<option value="20">Data &amp; Analytics</option>
																<option value="21">Home Business</option>
																<option value="22">Human Resources</option>
																<option value="23">Industry</option>
																<option value="24">Media</option>
																<option value="25">Real Estate</option>
																<option value="26">Other</option>
															</optgroup>
															<optgroup label="Finance &amp; Accounting">
																<option value="27">Accounting &amp; Bookkeeping</option>
																<option value="28">Compliance</option>
																<option value="29">Cryptocurrency &amp; Blockchain</option>
																<option value="30">Economics</option>
																<option value="31">Finance</option>
																<option value="32">Finance Cert &amp; Exam Prep</option>
																<option value="33">Financial Modeling &amp; Analysis</option>
																<option value="34">Investing &amp; Trading</option>
																<option value="35">Money Management Tools</option>
																<option value="36">Taxes</option>
																<option value="37">Other Finance &amp; Economics</option>
															</optgroup>
															<optgroup label="IT &amp; Software">
																<option value="38">IT Certification</option>
																<option value="39">Network &amp; Security</option>
																<option value="40"> Hardware</option>
																<option value="41">Operating Systems</option>
																<option value="42">Other</option>
															</optgroup>
															<optgroup label="Office Productivity">
																<option value="43">Microsoft</option>
																<option value="44">Apple</option>
																<option value="45">Google</option>
																<option value="46">SAP</option>
																<option value="47">Oracle</option>
															</optgroup>
															<optgroup label="Personal Development">
																<option value="48">Personal Transformation</option>
																<option value="49">Productivity</option>
																<option value="50">Leadership</option>
																<option value="51">Personal Finance</option>
																<option value="52">Career Development</option>
																<option value="53">Parenting &amp; Relationships</option>
																<option value="54">Happiness</option>
																<option value="55">Religion &amp; Spirituality</option>
																<option value="56">Personal Brand Building</option>
																<option value="57">Creativity</option>
																<option value="58">Influence</option>
																<option value="59">Self Esteem</option>
																<option value="60">Stress Management</option>
																<option value="61">Memory &amp; Study Skills</option>
																<option value="62">Motivation</option>
																<option value="63">Other</option>
															</optgroup>
															<optgroup label="Design">
																<option value="64">Web Design</option>
																<option value="65">Graphic Design</option>
																<option value="66">Design Tools</option>
																<option value="67">User Experience</option>
																<option value="68">Game Design</option>
																<option value="69">Design Thinking</option>
																<option value="70">3D &amp; Animation</option>
																<option value="71">Fashion</option>
																<option value="72">Architectural Design</option>
																<option value="73">Interior Design</option>
															</optgroup>
															<optgroup label="Marketing">
																<option value="74">Digital Marketing</option>
																<option value="75">Search Engine Optimization</option>
																<option value="76">Social Media Marketing</option>
																<option value="77">Branding</option>
																<option value="78">Marketing Fundamentals</option>
																<option value="79">Analytics &amp; Automation</option>
																<option value="80">Public Relations</option>
																<option value="81">Advertising</option>
																<option value="82">Video &amp; Mobile Marketing</option>
																<option value="83">Content Marketing</option>
																<option value="84">Growth Hacking</option>
																<option value="85">Affiliate Marketing</option>
																<option value="86">Product Marketing</option>
															</optgroup>
															<optgroup label="Lifestyle">
																<option value="87">Arts &amp; Crafts</option>
																<option value="88">Food &amp; Beverage</option>
																<option value="89">Beauty &amp; Makeup</option>
																<option value="90">Travel</option>
																<option value="91">Gaming</option>
																<option value="92">Home Improvement</option>
																<option value="93">Pet Care &amp; Training</option>
															</optgroup>
															<optgroup label="Photography">
																<option value="94">Digital Photography</option>
																<option value="95">Photography Fundamentals</option>
																<option value="96">Portraits</option>
																<option value="97">Photography Tools</option>
																<option value="98">Commercial Photography</option>
																<option value="100">Video Design</option>
															</optgroup>
															<optgroup label="Health &amp; Fitness">
																<option value="101">Fitness</option>
																<option value="102">General Health</option>
																<option value="103">Sports</option>
																<option value="104">Nutrition</option>
																<option value="105">Yoga</option>
																<option value="106">Mental Health</option>
																<option value="107">Dieting</option>
																<option value="108">Self Defense</option>
																<option value="109">Safety &amp; First Aid</option>
																<option value="110">Dance</option>
																<option value="111">Meditation</option>
															</optgroup>
															<optgroup label="Music">
																<option value="112">Instruments</option>
																<option value="113">Production</option>
																<option value="114">Music Fundamentals</option>
																<option value="115">Vocal</option>
																<option value="116">Music Techniques</option>
																<option value="117">Music Software</option>
															</optgroup>
														</select>																
													</div>															
												</div>
											</div>
										</div>
									</div>
								</div>									
								<div class="step-tab-panel step-tab-gallery" id="tab_step2">
									<div class="tab-from-content">
										<div class="title-icon">
											<h3 class="title"><i class="uil uil-notebooks"></i>Curriculum</h3>
										</div>
										<div class="curriculum-section">
											<div class="row">
												<div class="col-md-12">
													<div class="curriculum-add-item">
														<h4 class="section-title mt-0"><i class="fas fa-th-list me-2"></i>Curriculum</h4>
														<button class="main-btn color btn-hover ml-left add-section-title" data-bs-toggle="modal" data-bs-target="#add_section_model">New Section</button>
													</div>
													<div class="added-section-item">
														<div class="section-header">
															<h4><i class="fas fa-bars me-2"></i>Introduction</h4>
															<div class="section-edit-options">
																<button class="btn-152" type="button" data-toggle="collapse" data-target="#edit-section"><i class="fas fa-edit"></i></button>
																<button class="btn-152" type="button"><i class="fas fa-trash-alt"></i></button>
															</div>
														</div>
														<div id="edit-section" class="collapse">
															<div class="new-section smt-25">
																<div class="form_group">
																	<div class="ui search focus mt-30 lbel25">
																		<label>Section Name*</label>
																		<div class="ui left icon input swdh19">
																			<input class="prompt srch_explore" type="text" placeholder="" name="title" maxlength="60" id="main[title]" value="Introduction">															
																		</div>
																	</div>
																</div>
																<div class="share-submit-btns ps-0">
																	<button class="main-btn color btn-hover"><i class="fas fa-save me-2"></i>Update Section</button>
																</div>
															</div>
														</div>
														<div class="section-group-list sortable">
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="fas fa-file-alt me-2"></i>
																	<span class="section-item-title-text">lecture Title</span>
																</div>
																<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
																<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
															</div>
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="fas fa-stream me-2"></i>
																	<span class="section-item-title-text">Quiz Title</span>
																</div>
																<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
																<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
															</div>
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="fas fa-clipboard-list me-2"></i>
																	<span class="section-item-title-text">Assignment Title</span>
																</div>
																<button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
																<button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
															</div>
														</div>
														<div class="section-add-item-wrap p-3">
															<button class="add_lecture" data-bs-toggle="modal" data-bs-target="#add_lecture_model"><i class="far fa-plus-square me-2"></i>Lecture</button>
															<button class="add_quiz" data-bs-toggle="modal" data-bs-target="#add_quiz_model"><i class="far fa-plus-square me-2"></i>Quiz</button>
															<button class="add_assignment" data-bs-toggle="modal" data-bs-target="#add_assignment_model"><i class="far fa-plus-square me-2"></i>Assignment</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="step-tab-panel step-tab-location" id="tab_step3">
									<div class="tab-from-content">
										<div class="title-icon">
											<h3 class="title"><i class="uil uil-image"></i>Media</h3>
										</div>
										<div class="lecture-video-dt mb-30">
											<span class="video-info">Intro Course overview provider type. (.mp4, YouTube, Vimeo etc.)</span>
											<div class="video-category">
												<label ><input type="radio" name="colorRadio" value="mp4" checked><span>HTML5(mp4)</span></label>
												<label><input type="radio" name="colorRadio" value="url"><span>External URL</span></label>
												<label><input type="radio" name="colorRadio" value="youtube"><span>YouTube</span></label>
												<label><input type="radio" name="colorRadio" value="vimeo"><span>Vimeo</span></label>
												<label><input type="radio" name="colorRadio" value="embedded"><span>embedded</span></label>
												<div class="mp4 intro-box" style="display: block;">
													<div class="row">
														<div class="col-lg-5 col-md-12">
															<div class="upload-file-dt mt-30">
																<div class="upload-btn">													
																	<input class="uploadBtn-main-input" type="file" id="IntroFile__input--source">
																	<label for="IntroFile__input--source" title="Zip">Upload Video</label>
																</div>
																<span class="uploadBtn-main-file">File Format: .mp4</span>
																<span class="uploaded-id"></span>
															</div>
														</div>														
													</div>
												</div>
												<div class="url intro-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>External URL*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="External Video URL" name="" id="" value="">															
															</div>
														</div>
													</div>														
												</div>
												<div class="youtube intro-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>Youtube URL*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Youtube Video URL" name="" id="" value="">															
															</div>
														</div>
													</div>														
												</div>
												<div class="vimeo intro-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>Vimeo URL*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Vimeo Video URL" name="" id="" value="">															
															</div>
														</div>
													</div>														
												</div>
												<div class="embedded intro-box">
													<div class="new-section">
														<div class="ui search focus mt-30 lbel25">
															<label>Embedded Code*</label>
															<div class="ui form swdh30">
																<div class="field">
																	<textarea rows="3" name="" id="" placeholder="Place your embedded code here"></textarea>
																</div>
															</div>
														</div>
													</div>														
												</div>
											</div>
										</div>
										<div class="thumbnail-into">
											<div class="row">
												<div class="col-lg-5 col-md-6">
													<label class="label25 text-left">Course thumbnail*</label>
													<div class="thumb-item">
														<img src="images/thumbnail-demo.jpg" alt="">
														<div class="thumb-dt">													
															<div class="upload-btn">													
																<input class="uploadBtn-main-input" type="file" id="ThumbFile__input--source">
																<label for="ThumbFile__input--source" title="Zip">Choose Thumbnail</label>
															</div>
															<span class="uploadBtn-main-file">Size: 590x300 pixels. Supports: jpg,jpeg, or png</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="step-tab-panel step-tab-amenities" id="tab_step4">
									<div class="tab-from-content">
										<div class="title-icon">
											<h3 class="title"><i class="uil uil-usd-square"></i>Price</h3>
										</div>
									   <div class="course__form">
											<div class="price-block">
												<div class="row">
													<div class="col-md-12">
														<div class="course-main-tabs">
															<div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
																<a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" href="#nav-free" role="tab" aria-selected="true"><i class="fas fa-tag me-2"></i>Free</a>
																<a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#nav-paid" role="tab" aria-selected="false"><i class="fas fa-cart-arrow-down me-2"></i>Paid</a>
															</div>
															<div class="tab-content">
																<div class="tab-pane fade show active" id="nav-free" role="tabpanel">
																	<div class="price-require-dt">
																		<div class="cogs-toggle center_d">
																			<label class="switch">
																				<input type="checkbox" id="require_login" value="">
																				<span></span>
																			</label>
																			<label for="require_login" class="lbl-quiz">Require Log In</label>
																		</div>
																		<div class="cogs-toggle center_d mt-3">
																			<label class="switch">
																				<input type="checkbox" id="require_enroll" value="">
																				<span></span>
																			</label>
																			<label for="require_enroll" class="lbl-quiz">Require Enroll</label>
																		</div>
																		<p>If the course is free, if student require to enroll your course, if not required enroll, if students required sign in to your website to take this course.</p>
																	</div>
																</div>
																<div class="tab-pane" id="nav-paid" role="tabpanel">
																	<div class="license_pricing mt-30">
																		<label class="label25">Regular Price*</label>
																		<div class="row">
																			<div class="col-lg-4 col-md-6 col-sm-6">
																				<div class="loc_group">
																					<div class="ui left icon input swdh19">
																						<input class="prompt srch_explore" type="text" placeholder="$0" name="" id="" value="">															
																					</div>
																					<span class="slry-dt">USD</span>
																				</div>
																			</div>
																		</div>																		
																	</div>
																	<div class="license_pricing mt-30 mb-30">
																		<label class="label25">Discount Price*</label>
																		<div class="row">
																			<div class="col-lg-4 col-md-6 col-sm-6">
																				<div class="loc_group">
																					<div class="ui left icon input swdh19">
																						<input class="prompt srch_explore" type="text" placeholder="$0" name="" id="" value="">															
																					</div>
																					<span class="slry-dt">USD</span>
																				</div>
																			</div>
																		</div>																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									 </div>
								</div>
								<div class="step-tab-panel step-tab-location" id="tab_step5">
									<div class="tab-from-content">
										<div class="title-icon">
											<h3 class="title"><i class="uil uil-upload"></i>Submit</h3>
										</div>
									</div>
									<div class="publish-block">
										<i class="far fa-edit"></i>
										<p>Your course is in a draft state. Students cannot view, purchase or enroll in this course. For students that are already enrolled, this course will not appear on their student Dashboard.</p>
									</div>
								</div>
							</div>
							<div class="step-footer step-tab-pager">
								<button data-direction="prev" class="btn btn-default steps_btn">PREVIOUS</button>
								<button data-direction="next" class="btn btn-default steps_btn">Next</button>
								<button data-direction="finish" class="btn btn-default steps_btn">Submit for Review</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer mt-40">
		<div class="container-fluid">
			<div class="row">					
				<div class="col-lg-12">
					<div class="item_f1">
						<a href="terms_of_use.html">Copyright Policy</a>
						<a href="terms_of_use.html">Terms</a>
						<a href="terms_of_use.html">Privacy Policy</a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="footer_bottm">
						<div class="row">
							<div class="col-md-6">
								<ul class="fotb_left">
									<li>
										<a href="index.html">
											<div class="footer_logo">
												<img src="images/logo1.svg" alt="">
											</div>
										</a>
									</li>
									<li>
										<p>© 2024 <strong>Cursus</strong>. All Rights Reserved.</p>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<div class="edu_social_links">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-youtube"></i></a>
									<a href="#"><i class="fab fa-pinterest-p"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- Body End -->
@endsection

	