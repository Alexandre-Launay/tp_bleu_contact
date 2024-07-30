format 224

classcanvas 128006 class_ref 128134 // ModelRss
  classdiagramsettings show_members_visibility yes member_max_width 0 end
  xyz 456.28 434.34 2000
end
classcanvas 128134 class_ref 128262 // CtrlRss
  classdiagramsettings show_members_visibility yes member_max_width 0 end
  xyz 295.04 302.02 2000
end
classcanvas 128262 class_ref 128390 // ViewRss
  classdiagramsettings show_members_visibility yes member_max_width 0 end
  xyz 147.54 199.78 2000
end
classcanvas 129414 class_ref 128518 // DAO_RSS
  classdiagramsettings show_members_visibility yes member_max_width 0 end
  xyzwh 622.44 556.94 2000 73 55
end
relationcanvas 129030 relation_ref 128390 // <aggregation>
  from ref 128134 z 2001 to ref 128006
  no_role_a no_role_b
  no_multiplicity_a no_multiplicity_b
end
relationcanvas 129286 relation_ref 128646 // <aggregation>
  from ref 128134 z 2001 to ref 128262
  no_role_a no_role_b
  no_multiplicity_a no_multiplicity_b
end
relationcanvas 129542 relation_ref 128774 // <aggregation>
  from ref 128006 z 2001 to ref 129414
  no_role_a no_role_b
  no_multiplicity_a no_multiplicity_b
end
relationcanvas 129670 relation_ref 128262 // <aggregation>
  from ref 128006 z 2001 to ref 128134
  no_role_a no_role_b
  no_multiplicity_a no_multiplicity_b
end
end
