format 224

classinstance 128006 class_ref 128006 // User
  name ""   xyz 16.4 14.16 2000 life_line_z 2000
classinstance 128134 class_ref 128130 // SI
  name ""   xyz 1721.16 4.36 2000 life_line_z 2000
classinstance 128262 class_ref 128130 // SI
  name ""   xyz 793.9 14.54 2000 life_line_z 2000
classinstance 128390 class_ref 128390 // ViewRss
  name ""   xyz 124.14 173.68 2000 life_line_z 2000
classinstance 128518 class_ref 128262 // CtrlRss
  name ""   xyz 264.82 31.72 2000 life_line_z 2000
classinstance 128646 class_ref 128134 // ModelRss
  name ""   xyz 457.06 29.96 2000 life_line_z 2000
classinstance 128774 class_ref 128518 // DAO_RSS
  name ""   xyz 643.5 29.96 2000 life_line_z 2000
fragment 131846 ""
  color lightmagenta xyzwh 7.56 224.14 2000 511 359
  separator 4610
end
textcanvas 132102 "return 200"
  font large  xyzwh 45.24 230.72 2006 108 29
textcanvas 132230 "return 500"
  font large  xyzwh 43.1 398.56 2011 105 28
durationcanvas 128902 classinstance_ref 128006 // :User
  xyzwh 25 88.7 2010 11 55
end
durationcanvas 129030 classinstance_ref 128518 // :CtrlRss
  xyzwh 283 97.3 2010 11 378
end
durationcanvas 129286 classinstance_ref 128646 // :ModelRss
  xyzwh 482 99.6 2010 11 342
end
durationcanvas 129542 classinstance_ref 128774 // :DAO_RSS
  xyzwh 669 109.14 2010 11 90
end
durationcanvas 129798 classinstance_ref 128262 // :SI
  xyzwh 799 130.9 2010 11 50
end
durationcanvas 130438 classinstance_ref 128390 // :ViewRss
  xyzwh 148 275.32 2010 11 79
end
durationcanvas 130694 classinstance_ref 128006 // :User
  xyzwh 25 309.06 2010 11 57
end
durationcanvas 130950 classinstance_ref 128390 // :ViewRss
  xyzwh 148 438.78 2010 11 87
end
durationcanvas 131206 classinstance_ref 128006 // :User
  xyzwh 25 487.6 2010 11 66
end
msg 129158 asynchronous
  from durationcanvas_ref 128902
  to durationcanvas_ref 129030
  yz 98 2015 msg operation_ref 128262 // "getRss()"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 139 84
msg 129414 asynchronous
  from durationcanvas_ref 129030
  to durationcanvas_ref 129286
  yz 118 2015 msg operation_ref 128390 // "selectRss()"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 360 104
msg 129670 asynchronous
  from durationcanvas_ref 129286
  to durationcanvas_ref 129542
  yz 122 2015 msg operation_ref 128006 // "requete()"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 559 108
msg 129926 synchronous
  from durationcanvas_ref 129542
  to durationcanvas_ref 129798
  yz 137 2020 unspecifiedmsg
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
msg 130054 return
  from durationcanvas_ref 129798
  to durationcanvas_ref 129542
  yz 166 2015 unspecifiedmsg
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
msg 130182 return
  from durationcanvas_ref 129542
  to durationcanvas_ref 129286
  yz 188 2020 unspecifiedmsg
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
msg 130310 return
  from durationcanvas_ref 129286
  to durationcanvas_ref 129030
  yz 251 2025 explicitmsg "retour 200"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 363 237
msg 130566 synchronous
  from durationcanvas_ref 129030
  to durationcanvas_ref 130438
  yz 285 2015 msg operation_ref 128134 // "afficherRss()"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 189 271
msg 130822 return
  from durationcanvas_ref 130438
  to durationcanvas_ref 130694
  yz 322 2015 explicitmsg "html"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 83 308
msg 131078 synchronous
  from durationcanvas_ref 129030
  to durationcanvas_ref 130950
  yz 451 2015 explicitmsg "afficherErrorRss()"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 181 437
msg 131334 return
  from durationcanvas_ref 130950
  to durationcanvas_ref 131206
  yz 494 2015 explicitmsg "error 500"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 70 480
msg 131462 return
  from durationcanvas_ref 129286
  to durationcanvas_ref 129030
  yz 419 2015 explicitmsg "error 500"
  show_full_operations_definition default show_class_of_operation default drawing_language default show_context_mode default
  label_xy 366 405
end