Issue with submitType Propagation in formType

POST data are:
- CustomFormType[searchfield]: mysearchtoplevel
- CustomFormType[searchbtn]:

Bug do as if POST data was:
- CustomFormType[searchfield]: mysearchtoplevel
- CustomFormType[searchbtn]:
- CustomFormType[sub][searchbtn]:

Trivial Solution
- change searchbtn name in Custom2FormType, 

problem: I want CustomFormType be a "generic" Type used in many cascade levels (CustomFormType nested in CustomFormType, in this case, sub field is created conditionnaly)
