<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{6AFD8A3C-6291-487C-B57B-99609669AD62}" Label="" LastModificationDate="1531477462" Name="Définition de cas d&#39;utilisation_1" Objects="48" Symbols="60" Target="Java" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>6AFD8A3C-6291-487C-B57B-99609669AD62</a:ObjectID>
<a:Name>Définition de cas d&#39;utilisation_1</a:Name>
<a:Code>Definition_de_cas_d_utilisation_1</a:Code>
<a:CreationDate>1531475347</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477250</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:PackageOptionsText>[FolderOptions]

[FolderOptions\Class Diagram Objects]
GenerationCheckModel=Yes
GenerationPath=
GenerationOptions=
GenerationTasks=
GenerationTargets=
GenerationSelections=</a:PackageOptionsText>
<a:ModelOptionsText>[ModelOptions]

[ModelOptions\Cld]
CaseSensitive=Yes
DisplayName=Yes
EnableTrans=Yes
EnableRequirements=No
ShowClss=No
DeftAttr=int
DeftMthd=int
DeftParm=int
DeftCont=java.util.Collection
DomnDttp=Yes
DomnChck=No
DomnRule=No
SupportDelay=No
PreviewEditable=Yes
AutoRealize=No
DttpFullName=Yes
DeftClssAttrVisi=private
VBNetPreprocessingSymbols=
CSharpPreprocessingSymbols=

[ModelOptions\Cld\NamingOptionsTemplates]

[ModelOptions\Cld\ClssNamingOptions]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN]

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS]

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF]

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR]

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS]

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT]

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG]

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP]

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR]

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD]

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM]

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT]

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART]

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC]

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC]

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK]

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK]

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK]

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK]

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV]

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST]

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT]

[ModelOptions\Cld\ClssNamingOptions\STAT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE]

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI]

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC]

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR]

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO]

[ModelOptions\Cld\ClssNamingOptions\FILO\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=&quot;\/:*?&lt;&gt;|&quot;
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_. &quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ]

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK]

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass]

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Generate]

[ModelOptions\Generate\Cdm]
CheckModel=Yes
SaveLinks=Yes
NameToCode=No
Notation=2

[ModelOptions\Generate\Pdm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No
BuildTrgr=No
TablePrefix=
RefrUpdRule=RESTRICT
RefrDelRule=RESTRICT
IndxPKName=%TABLE%_PK
IndxAKName=%TABLE%_AK
IndxFKName=%REFR%_FK
IndxThreshold=
ColnFKName=%.3:PARENT%_%COLUMN%
ColnFKNameUse=No

[ModelOptions\Generate\Xsm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No</a:ModelOptionsText>
<c:ObjectLanguage>
<o:Shortcut Id="o3">
<a:ObjectID>F4D2246A-4E11-4458-8806-F89BEC3EFC6C</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1531475346</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475346</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ExtendedModelDefinitions>
<o:Shortcut Id="o4">
<a:ObjectID>7F88135F-65EE-48D7-897E-790DDE113D01</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1531475348</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475348</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetID>
<a:TargetClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetClassID>
</o:Shortcut>
</c:ExtendedModelDefinitions>
<c:DefaultDiagram>
<o:UseCaseDiagram Ref="o5"/>
</c:DefaultDiagram>
<c:UseCaseDiagrams>
<o:UseCaseDiagram Id="o5">
<a:ObjectID>B2943703-00D0-4197-AF22-D31944B7509A</a:ObjectID>
<a:Name>DiagrammeCasUtilisation_1</a:Name>
<a:Code>DiagrammeCasUtilisation_1</a:Code>
<a:CreationDate>1531475347</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477250</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\UCD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=0
Graphic unit=2
Window color=255, 255, 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255, 255, 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=0
Trunc Length=80
Word Length=80
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
Actor.IconPicture=No
Actor_SymbolLayout=
UseCase.Stereotype=Yes
UseCase.Comment=No
UseCase.IconPicture=No
UseCase_SymbolLayout=&lt;Form&gt;[CRLF] &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Nom&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF] &lt;Separator Name=&quot;Séparateur&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Commentaire&quot; Attribute=&quot;Comment&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;LEFT&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Icône&quot; Attribute=&quot;IconPicture&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF]&lt;/Form&gt;
ActrShowStrn=Yes
AsscShowName=No
AsscShowDirt=No
AsscShowStrn=No
GnrlShowName=No
GnrlShowStrn=No
GnrlShowCntr=No
DepdShowName=No
DepdShowStrn=Yes
DepdShowCntr=No

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=2400
Height=2400
Brush color=255 255 255
Fill Color=No
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDACTR]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 150 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDASSC]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=2
Pen=1 0 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\GNRLLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=2
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\DEPDLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=2
Pen=2 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDUCAS]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=7200
Height=5400
Brush color=192 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 150 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8268, 11693)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>1</a:PageOrientation>
<a:PaperSource>15</a:PaperSource>
<c:Symbols>
<o:TextSymbol Id="o6">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531476093</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((2176,6039), (6975,9638))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o7">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531476191</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((13201,5964), (18000,9563))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o8">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531476332</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-3824,3189), (975,6788))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o9">
<a:Text>&lt;&lt;extend&gt;&gt;</a:Text>
<a:CreationDate>1531476438</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((2176,-486), (6975,3113))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o10">
<a:Text>&lt;&lt;extend&gt;&gt;</a:Text>
<a:CreationDate>1531476536</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((17851,1764), (22650,5363))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o11">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531476769</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((1576,-8174), (6375,-4575))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o12">
<a:Text>&lt;&lt;include&gt;&gt;
</a:Text>
<a:CreationDate>1531476771</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((826,-13424), (5625,-9825))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o13">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531477029</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-4349,14401), (450,18000))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o14">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531477031</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((7426,13951), (12225,17550))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:UseCaseAssociationSymbol Id="o15">
<a:CreationDate>1531476046</a:CreationDate>
<a:ModificationDate>1531477355</a:ModificationDate>
<a:Rect>((-18675,-9337), (-8550,-6395))</a:Rect>
<a:ListOfPoints>((-18675,-9337),(-18675,-6395),(-8550,-6395))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o16"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o17"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o18"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o19">
<a:CreationDate>1531476048</a:CreationDate>
<a:ModificationDate>1531476880</a:ModificationDate>
<a:Rect>((-19500,-10566), (-8625,-8887))</a:Rect>
<a:ListOfPoints>((-19500,-8887),(-19500,-10566),(-8625,-10566))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o16"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o20"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o21"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o22">
<a:CreationDate>1531476051</a:CreationDate>
<a:ModificationDate>1531476727</a:ModificationDate>
<a:Rect>((-19275,-524), (-11175,-424))</a:Rect>
<a:ListOfPoints>((-19275,-524),(-11175,-524))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o23"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o24"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o25"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o26">
<a:CreationDate>1531476055</a:CreationDate>
<a:ModificationDate>1531477345</a:ModificationDate>
<a:Rect>((-18750,7088), (-12600,10324))</a:Rect>
<a:ListOfPoints>((-18750,7088),(-18750,10324),(-12600,10324))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o27"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o28"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o29"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o30">
<a:CreationDate>1531476067</a:CreationDate>
<a:ModificationDate>1531476855</a:ModificationDate>
<a:Rect>((-19425,7097), (-9750,7126))</a:Rect>
<a:ListOfPoints>((-19425,7126),(-9750,7097))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o27"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o31"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o32"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:ExtendedDependencySymbol Id="o33">
<a:CreationDate>1531476075</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((825,6983), (8775,7583))</a:Rect>
<a:ListOfPoints>((825,7283),(8775,7283))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o31"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o34"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o35"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o36">
<a:CreationDate>1531476186</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((13425,6789), (18525,7389))</a:Rect>
<a:ListOfPoints>((13425,7089),(18525,7089))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o34"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o37"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o38"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:UseCaseAssociationSymbol Id="o39">
<a:CreationDate>1531476260</a:CreationDate>
<a:ModificationDate>1531477338</a:ModificationDate>
<a:Rect>((-18600,5025), (-9600,7350))</a:Rect>
<a:ListOfPoints>((-18600,7350),(-18600,5025),(-9600,5025))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o27"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o40"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o41"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:ExtendedDependencySymbol Id="o42">
<a:CreationDate>1531476311</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-3975,3751), (2850,4351))</a:Rect>
<a:ListOfPoints>((-3975,4051),(2850,4051))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o40"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o43"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o44"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o45">
<a:CreationDate>1531476433</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((6450,-637), (12375,3038))</a:Rect>
<a:ListOfPoints>((6450,3038),(6450,-637),(12375,-637))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o43"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o46"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o47"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o48">
<a:CreationDate>1531476529</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((21225,1763), (22650,5513))</a:Rect>
<a:ListOfPoints>((21225,5513),(21225,3864),(22650,3864),(22650,1763))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o37"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o49"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o50"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o51">
<a:CreationDate>1531476761</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((900,-7725), (9825,-5804))</a:Rect>
<a:ListOfPoints>((900,-5804),(900,-7725),(9825,-7725))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o17"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o52"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o53"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o54">
<a:CreationDate>1531476765</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-300,-10471), (9300,-9075))</a:Rect>
<a:ListOfPoints>((-300,-10471),(3937,-10471),(3937,-9075),(9300,-9075))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o20"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o52"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o55"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o56">
<a:CreationDate>1531477021</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-4275,15300), (1500,15900))</a:Rect>
<a:ListOfPoints>((-4275,15600),(1500,15600))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o57"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o58"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o59"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o60">
<a:CreationDate>1531477025</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((7425,14887), (14175,15487))</a:Rect>
<a:ListOfPoints>((7425,15187),(14175,15187))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>1</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o58"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o61"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o62"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:UseCaseAssociationSymbol Id="o63">
<a:CreationDate>1531477117</a:CreationDate>
<a:ModificationDate>1531477299</a:ModificationDate>
<a:Rect>((-19125,15300), (-11775,15375))</a:Rect>
<a:ListOfPoints>((-19125,15375),(-11775,15300))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o64"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o57"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o65"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o66">
<a:CreationDate>1531477120</a:CreationDate>
<a:ModificationDate>1531477299</a:ModificationDate>
<a:Rect>((-19350,16800), (-12450,19350))</a:Rect>
<a:ListOfPoints>((-19350,16800),(-19350,19350),(-12450,19350))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o64"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o67"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o68"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:GeneralizationSymbol Id="o69">
<a:CreationDate>1531477199</a:CreationDate>
<a:ModificationDate>1531477292</a:ModificationDate>
<a:Rect>((-19775,-14775), (-18775,-10050))</a:Rect>
<a:ListOfPoints>((-19275,-14775),(-19275,-10050))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o70"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o16"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o71"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o72">
<a:CreationDate>1531477208</a:CreationDate>
<a:ModificationDate>1531477278</a:ModificationDate>
<a:Rect>((-19812,-6975), (-18812,-750))</a:Rect>
<a:ListOfPoints>((-19312,-6975),(-19312,-750))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o16"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o23"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o73"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o74">
<a:CreationDate>1531477211</a:CreationDate>
<a:ModificationDate>1531477260</a:ModificationDate>
<a:Rect>((-20037,1125), (-19037,7125))</a:Rect>
<a:ListOfPoints>((-19537,1125),(-19537,7125))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o23"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o27"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o75"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o76">
<a:CreationDate>1531477250</a:CreationDate>
<a:ModificationDate>1531477303</a:ModificationDate>
<a:Rect>((-19962,9975), (-18962,15825))</a:Rect>
<a:ListOfPoints>((-19425,9975),(-19500,9975),(-19500,15825))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o27"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o64"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o77"/>
</c:Object>
</o:GeneralizationSymbol>
<o:ActorSymbol Id="o70">
<a:CreationDate>1531475381</a:CreationDate>
<a:ModificationDate>1531477286</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-21750,-18037), (-16951,-14438))</a:Rect>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>12648447</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o78"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o27">
<a:CreationDate>1531475384</a:CreationDate>
<a:ModificationDate>1531476727</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-21825,6338), (-17026,9937))</a:Rect>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>12648447</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o79"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o23">
<a:CreationDate>1531475390</a:CreationDate>
<a:ModificationDate>1531476727</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-21825,-1837), (-17026,1762))</a:Rect>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>12648447</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o80"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o16">
<a:CreationDate>1531475392</a:CreationDate>
<a:ModificationDate>1531476727</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-21675,-10312), (-16876,-6713))</a:Rect>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>12648447</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o81"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o64">
<a:CreationDate>1531475397</a:CreationDate>
<a:ModificationDate>1531477299</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-21975,15188), (-17176,18787))</a:Rect>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>12648447</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o82"/>
</c:Object>
</o:ActorSymbol>
<o:UseCaseSymbol Id="o20">
<a:CreationDate>1531475417</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-12073,-11513), (451,-8925))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o83"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o17">
<a:CreationDate>1531475419</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-11850,-7313), (1200,-4575))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o84"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o52">
<a:CreationDate>1531475424</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((7424,-10275), (15450,-6675))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o85"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o24">
<a:CreationDate>1531475425</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-12975,-2438), (2925,338))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o86"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o28">
<a:CreationDate>1531475426</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-13575,9260), (375,11700))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o87"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o31">
<a:CreationDate>1531475427</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-13723,5888), (2625,8250))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o88"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o34">
<a:CreationDate>1531475946</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((7050,4913), (13501,9412))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o89"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o37">
<a:CreationDate>1531475948</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((17475,4987), (23700,9413))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o90"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o40">
<a:CreationDate>1531475948</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-11376,2813), (-3676,5288))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o91"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o67">
<a:CreationDate>1531475949</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-14625,18224), (-525,19914))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o92"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o57">
<a:CreationDate>1531475950</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((-13501,14550), (-3825,16537))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o93"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o58">
<a:CreationDate>1531475951</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((300,13913), (7800,16650))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o94"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o43">
<a:CreationDate>1531476284</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((1200,2437), (7425,5588))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o95"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o46">
<a:CreationDate>1531476389</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((7575,-1163), (13576,1913))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o96"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o49">
<a:CreationDate>1531476481</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((21525,-564), (27300,2738))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o97"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o61">
<a:CreationDate>1531476962</a:CreationDate>
<a:ModificationDate>1531477462</a:ModificationDate>
<a:Rect>((12301,14100), (21525,16651))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o98"/>
</c:Object>
</o:UseCaseSymbol>
</c:Symbols>
</o:UseCaseDiagram>
</c:UseCaseDiagrams>
<c:Generalizations>
<o:Generalization Id="o71">
<a:ObjectID>F8C5C7D8-3A98-4AE7-9F5C-7ACDB35E3DFE</a:ObjectID>
<a:Name>Generalisation_1</a:Name>
<a:Code>Generalisation_1</a:Code>
<a:CreationDate>1531477199</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477199</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o81"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o78"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o73">
<a:ObjectID>4B0450B9-2F50-4085-B664-22D6EA5FCEC9</a:ObjectID>
<a:Name>Generalisation_2</a:Name>
<a:Code>Generalisation_2</a:Code>
<a:CreationDate>1531477208</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477208</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o80"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o81"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o75">
<a:ObjectID>6852A0B3-235B-4B26-B124-395DB36CE72E</a:ObjectID>
<a:Name>Generalisation_3</a:Name>
<a:Code>Generalisation_3</a:Code>
<a:CreationDate>1531477211</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477211</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o79"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o80"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o77">
<a:ObjectID>E7A990D8-E856-4762-96AD-7B4B5C17CA50</a:ObjectID>
<a:Name>Generalisation_4</a:Name>
<a:Code>Generalisation_4</a:Code>
<a:CreationDate>1531477250</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477250</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o82"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o79"/>
</c:Object2>
</o:Generalization>
</c:Generalizations>
<c:Actors>
<o:Actor Id="o78">
<a:ObjectID>C662E4EC-B029-4EDA-B1A1-2488069F7153</a:ObjectID>
<a:Name>Admine</a:Name>
<a:Code>Admine</a:Code>
<a:CreationDate>1531475381</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476700</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o79">
<a:ObjectID>16771662-5F65-447E-A129-397ED56AB72B</a:ObjectID>
<a:Name>Chef_Projet</a:Name>
<a:Code>Chef_Projet</a:Code>
<a:CreationDate>1531475384</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476657</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o80">
<a:ObjectID>BDD7BFB0-515A-4CB1-B021-97A5EFE0E46A</a:ObjectID>
<a:Name>Chef_Entité</a:Name>
<a:Code>Chef_Entite</a:Code>
<a:CreationDate>1531475390</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476683</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o81">
<a:ObjectID>E271A0E9-99E0-4308-BDD6-8EA380ABB48D</a:ObjectID>
<a:Name>Gérant</a:Name>
<a:Code>Gerant</a:Code>
<a:CreationDate>1531475392</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476690</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o82">
<a:ObjectID>2798AC66-6D86-4A44-A64C-8E187038042C</a:ObjectID>
<a:Name>Employé</a:Name>
<a:Code>Employe</a:Code>
<a:CreationDate>1531475397</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476591</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
</c:Actors>
<c:UseCases>
<o:UseCase Id="o83">
<a:ObjectID>B2D412B7-1726-4DCC-BF47-9A21377104F7</a:ObjectID>
<a:Name>modifier utilisateur</a:Name>
<a:Code>modifier_utilisateur</a:Code>
<a:CreationDate>1531475417</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475595</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o84">
<a:ObjectID>AA3BECCB-402F-45A0-BB0E-F244B9248FA6</a:ObjectID>
<a:Name>Ajouter utilisateur</a:Name>
<a:Code>Ajouter_utilisateur</a:Code>
<a:CreationDate>1531475419</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475611</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o85">
<a:ObjectID>064478A3-372F-4E65-9FDE-9E7F46B9CF1D</a:ObjectID>
<a:Name>utilisateur existe</a:Name>
<a:Code>utilisateur_existe</a:Code>
<a:CreationDate>1531475424</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476745</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o86">
<a:ObjectID>46B487CF-F8F1-451B-8246-D933495D3812</a:ObjectID>
<a:Name>Voir les projets des Chef_projet</a:Name>
<a:Code>Voir_les_projets_des_Chef_projet</a:Code>
<a:CreationDate>1531475425</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475775</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o87">
<a:ObjectID>2C3642B5-E328-47FF-911A-AC18963D2E88</a:ObjectID>
<a:Name>Générer Rapport d&#39;un Projet</a:Name>
<a:Code>Generer_Rapport_d_un_Projet</a:Code>
<a:CreationDate>1531475426</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475855</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o88">
<a:ObjectID>F301998F-EE24-49B3-A106-384ADA4DFA22</a:ObjectID>
<a:Name>Attribuer une Tache à un Employé</a:Name>
<a:Code>Attribuer_une_Tache_a_un_Employe</a:Code>
<a:CreationDate>1531475427</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475926</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o89">
<a:ObjectID>A30D32B7-7D6A-4A88-837C-0E3B83209C34</a:ObjectID>
<a:Name>Ajout Tache</a:Name>
<a:Code>Ajout_Tache</a:Code>
<a:CreationDate>1531475946</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476029</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o90">
<a:ObjectID>D7E22289-4EC6-4945-9401-EA1CA9601F97</a:ObjectID>
<a:Name>Ajout Projet</a:Name>
<a:Code>Ajout_Projet</a:Code>
<a:CreationDate>1531475948</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476169</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o91">
<a:ObjectID>8F3D5E05-1B50-4E83-8155-8605A044816D</a:ObjectID>
<a:Name>Modifier Tache</a:Name>
<a:Code>Modifier_Tache</a:Code>
<a:CreationDate>1531475948</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476247</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o92">
<a:ObjectID>B863B1AD-CF7C-465A-826B-5D1910A4450F</a:ObjectID>
<a:Name>Voir Calendrier des Projets</a:Name>
<a:Code>Voir_Calendrier_des_Projets</a:Code>
<a:CreationDate>1531475949</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476843</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o93">
<a:ObjectID>8553D8DF-7908-45C8-A82E-61424EBC5FF9</a:ObjectID>
<a:Name>voir tache</a:Name>
<a:Code>voir_tache</a:Code>
<a:CreationDate>1531475950</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476908</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o94">
<a:ObjectID>931BF36C-650B-46FD-A57B-1EEFEE2B951D</a:ObjectID>
<a:Name>avoir Tache</a:Name>
<a:Code>avoir_Tache</a:Code>
<a:CreationDate>1531475951</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476934</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o95">
<a:ObjectID>C5077BB7-0B11-4CD8-8423-F01C1ACB4846</a:ObjectID>
<a:Name>Tache existe</a:Name>
<a:Code>Tache_existe</a:Code>
<a:CreationDate>1531476284</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476299</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o96">
<a:ObjectID>1E5D3595-1C62-45B1-AFEC-865780E0E890</a:ObjectID>
<a:Name>Voir Tache</a:Name>
<a:Code>Voir_Tache</a:Code>
<a:CreationDate>1531476389</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476409</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o97">
<a:ObjectID>4D626A5C-F194-4B3E-B491-FC7A17EEA787</a:ObjectID>
<a:Name>Voir Projet</a:Name>
<a:Code>Voir_Projet</a:Code>
<a:CreationDate>1531476481</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476504</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o98">
<a:ObjectID>D39D9DC8-4EB3-4091-90CF-BA84BC3CAEBA</a:ObjectID>
<a:Name>appartient à Projet</a:Name>
<a:Code>appartient_a_Projet</a:Code>
<a:CreationDate>1531476962</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477006</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
</c:UseCases>
<c:UseCaseAssociations>
<o:UseCaseAssociation Id="o18">
<a:ObjectID>0DAA4FAF-26D3-4D09-A10A-446E3D7E2F03</a:ObjectID>
<a:Name>Association_1</a:Name>
<a:Code>Association_1</a:Code>
<a:CreationDate>1531476046</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476046</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o84"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o81"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o21">
<a:ObjectID>1BF4D889-1B54-4EFC-BFEA-3DAEB32887C9</a:ObjectID>
<a:Name>Association_2</a:Name>
<a:Code>Association_2</a:Code>
<a:CreationDate>1531476048</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476048</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o83"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o81"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o25">
<a:ObjectID>0A22DAB2-A564-4E37-9273-E0AD9AED00DF</a:ObjectID>
<a:Name>Association_3</a:Name>
<a:Code>Association_3</a:Code>
<a:CreationDate>1531476051</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476051</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o86"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o80"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o29">
<a:ObjectID>1CB03C04-31A9-46FB-AF52-6E335C1C16AF</a:ObjectID>
<a:Name>Association_4</a:Name>
<a:Code>Association_4</a:Code>
<a:CreationDate>1531476055</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476055</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o87"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o79"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o32">
<a:ObjectID>FA2CE9DB-E28D-448C-84A4-C8D7B8823F6A</a:ObjectID>
<a:Name>Association_5</a:Name>
<a:Code>Association_5</a:Code>
<a:CreationDate>1531476067</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476067</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o88"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o79"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o41">
<a:ObjectID>C3271572-9E49-4AE3-8B5E-725C7AF5E937</a:ObjectID>
<a:Name>Association_6</a:Name>
<a:Code>Association_6</a:Code>
<a:CreationDate>1531476260</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476260</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o91"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o79"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o65">
<a:ObjectID>723416B9-76ED-40FD-823B-ED17AB1E6C81</a:ObjectID>
<a:Name>Association_7</a:Name>
<a:Code>Association_7</a:Code>
<a:CreationDate>1531477117</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477117</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o93"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o82"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o68">
<a:ObjectID>F3C97898-CAEC-4BAA-B6B2-9BA0F937D7FF</a:ObjectID>
<a:Name>Association_8</a:Name>
<a:Code>Association_8</a:Code>
<a:CreationDate>1531477120</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477120</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o92"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o82"/>
</c:Object2>
</o:UseCaseAssociation>
</c:UseCaseAssociations>
<c:ChildExtendedDependencies>
<o:ExtendedDependency Id="o35">
<a:ObjectID>15D40A4E-741B-4A37-AD7D-16C2D37C09A5</a:ObjectID>
<a:CreationDate>1531476075</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476075</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o89"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o88"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o38">
<a:ObjectID>5CBF9D74-0013-455C-ACAF-38672AB56CC4</a:ObjectID>
<a:CreationDate>1531476186</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476186</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o90"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o89"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o44">
<a:ObjectID>1BD7DD52-CEE0-424B-9FD6-02E19B9B2065</a:ObjectID>
<a:CreationDate>1531476311</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476311</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o95"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o91"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o47">
<a:ObjectID>32853B0E-1958-4CA6-A58C-C07F893E8AC1</a:ObjectID>
<a:CreationDate>1531476433</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476433</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o96"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o95"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o50">
<a:ObjectID>1F335BF7-4419-40B5-A087-90514FEA82D6</a:ObjectID>
<a:CreationDate>1531476529</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476529</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o97"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o90"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o53">
<a:ObjectID>5FCD8F38-1A89-4B9F-B0B5-2F243F7D58B0</a:ObjectID>
<a:CreationDate>1531476761</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476761</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o85"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o84"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o55">
<a:ObjectID>6E866027-CEC7-4440-B873-5012F9A5F3CC</a:ObjectID>
<a:CreationDate>1531476765</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476765</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o85"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o83"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o59">
<a:ObjectID>1F544768-E855-450E-8C25-A3AF3D345C21</a:ObjectID>
<a:CreationDate>1531477021</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477021</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o94"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o93"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o62">
<a:ObjectID>9FF1C502-8DA4-4F49-97A8-DFEF57E4FEB4</a:ObjectID>
<a:CreationDate>1531477025</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477025</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o98"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o94"/>
</c:Object2>
</o:ExtendedDependency>
</c:ChildExtendedDependencies>
<c:TargetModels>
<o:TargetModel Id="o99">
<a:ObjectID>F763F3C6-A949-46AE-86A7-84A7382CF9EB</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1531475346</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475346</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java5-j2ee14.xol</a:TargetModelURL>
<a:TargetModelID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o100">
<a:ObjectID>F21CAA15-0AF0-45A1-9644-EC48F2AD93C4</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1531475348</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475348</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:TargetModelURL>file:///%_XEM%/WSDLJ2EE.xem</a:TargetModelURL>
<a:TargetModelID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetModelID>
<a:TargetModelClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o4"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>