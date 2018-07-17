<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{6AFD8A3C-6291-487C-B57B-99609669AD62}" Label="" LastModificationDate="1531753351" Name="Définition de cas d&#39;utilisation_1" Objects="61" Symbols="78" Target="Java" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
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
<a:ModificationDate>1531753346</a:ModificationDate>
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
<a:ModificationDate>1531753346</a:ModificationDate>
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
<o:PolylineSymbol Id="o6">
<a:CreationDate>1531751207</a:CreationDate>
<a:ModificationDate>1531753007</a:ModificationDate>
<a:Rect>((-28125,12975), (-12750,16021))</a:Rect>
<a:ListOfPoints>((-28125,16021),(-28125,12975),(-12750,12975))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16711680</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:TextSymbol Id="o7">
<a:Text>&lt;&lt;include&gt;&gt;</a:Text>
<a:CreationDate>1531751494</a:CreationDate>
<a:ModificationDate>1531751494</a:ModificationDate>
<a:Rect>((-6899,12526), (-2100,16125))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>0</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:TextSymbol>
<o:PolylineSymbol Id="o8">
<a:CreationDate>1531751987</a:CreationDate>
<a:ModificationDate>1531752019</a:ModificationDate>
<a:Rect>((-29700,2026), (-12000,6526))</a:Rect>
<a:ListOfPoints>((-29700,6526),(-29700,2026),(-12000,2026))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16711680</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:UseCaseAssociationSymbol Id="o9">
<a:CreationDate>1531750449</a:CreationDate>
<a:ModificationDate>1531751685</a:ModificationDate>
<a:Rect>((-28575,-5625), (-8775,-1350))</a:Rect>
<a:ListOfPoints>((-28575,-5625),(-28575,-1350),(-8775,-1350))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o12"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:GeneralizationSymbol Id="o13">
<a:CreationDate>1531750468</a:CreationDate>
<a:ModificationDate>1531751998</a:ModificationDate>
<a:Rect>((-30349,-5775), (-29349,6300))</a:Rect>
<a:ListOfPoints>((-29849,-5775),(-29849,6300))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o14"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o15"/>
</c:Object>
</o:GeneralizationSymbol>
<o:DependencySymbol Id="o16">
<a:CreationDate>1531750556</a:CreationDate>
<a:ModificationDate>1531751479</a:ModificationDate>
<a:Rect>((-7425,16199), (3375,16799))</a:Rect>
<a:ListOfPoints>((-7425,16499),(3375,16499))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o17"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o18"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o19"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o20">
<a:CreationDate>1531750558</a:CreationDate>
<a:ModificationDate>1531751479</a:ModificationDate>
<a:Rect>((4275,15861), (14250,16461))</a:Rect>
<a:ListOfPoints>((4275,16161),(14250,16161))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o18"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o21"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o22"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o23">
<a:CreationDate>1531750560</a:CreationDate>
<a:ModificationDate>1531752907</a:ModificationDate>
<a:Rect>((0,6811), (8850,7411))</a:Rect>
<a:ListOfPoints>((0,7111),(8850,7111))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o24"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o25"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o26"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o27">
<a:CreationDate>1531750561</a:CreationDate>
<a:ModificationDate>1531752995</a:ModificationDate>
<a:Rect>((11250,6543), (20618,7143))</a:Rect>
<a:ListOfPoints>((11250,6843),(20618,6843))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o25"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o28"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o29"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o30">
<a:CreationDate>1531750563</a:CreationDate>
<a:ModificationDate>1531752698</a:ModificationDate>
<a:Rect>((-4487,3955), (4462,4555))</a:Rect>
<a:ListOfPoints>((-4487,4255),(4462,4255))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o31"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o32"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o33"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o34">
<a:CreationDate>1531750566</a:CreationDate>
<a:ModificationDate>1531752698</a:ModificationDate>
<a:Rect>((5406,1350), (8625,4303))</a:Rect>
<a:ListOfPoints>((5406,4303),(5406,1350),(8625,1350))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o32"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o35"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o36"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o37">
<a:CreationDate>1531750572</a:CreationDate>
<a:ModificationDate>1531752995</a:ModificationDate>
<a:Rect>((21298,3560), (25620,5940))</a:Rect>
<a:ListOfPoints>((21298,5940),(21298,3560),(25620,3560))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o28"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o38"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o39"/>
</c:Object>
</o:DependencySymbol>
<o:ExtendedDependencySymbol Id="o40">
<a:CreationDate>1531750617</a:CreationDate>
<a:ModificationDate>1531751595</a:ModificationDate>
<a:Rect>((-9150,-9787), (13125,-9187))</a:Rect>
<a:ListOfPoints>((-9150,-9487),(13125,-9487))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o41"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o42"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o43"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:DependencySymbol Id="o44">
<a:CreationDate>1531751178</a:CreationDate>
<a:ModificationDate>1531751474</a:ModificationDate>
<a:Rect>((-6715,13500), (15525,15525))</a:Rect>
<a:ListOfPoints>((-6715,13500),(15525,13500),(15525,15525))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o45"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o21"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o46"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o47">
<a:CreationDate>1531751657</a:CreationDate>
<a:ModificationDate>1531751685</a:ModificationDate>
<a:Rect>((-4725,-2100), (36975,1425))</a:Rect>
<a:ListOfPoints>((-4725,-2100),(36975,-2100),(36975,1425))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o49"/>
</c:Object>
</o:DependencySymbol>
<o:DependencySymbol Id="o50">
<a:CreationDate>1531751663</a:CreationDate>
<a:ModificationDate>1531751683</a:ModificationDate>
<a:Rect>((-6821,-5100), (38475,2400))</a:Rect>
<a:ListOfPoints>((-6821,-5100),(38475,-5100),(38475,2400))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o51"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:Dependency Ref="o52"/>
</c:Object>
</o:DependencySymbol>
<o:UseCaseAssociationSymbol Id="o53">
<a:CreationDate>1531753342</a:CreationDate>
<a:ModificationDate>1531753342</a:ModificationDate>
<a:Rect>((-29475,-16558), (-12150,-16458))</a:Rect>
<a:ListOfPoints>((-29475,-16558),(-12150,-16558))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o54"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o55"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o56"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:ExtendedDependencySymbol Id="o57">
<a:CreationDate>1531753346</a:CreationDate>
<a:ModificationDate>1531753351</a:ModificationDate>
<a:Rect>((-7050,-16633), (36675,1517))</a:Rect>
<a:ListOfPoints>((-7050,-16633),(36675,-16633),(36675,1517))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o55"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o58"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:TextSymbol Id="o59">
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
<o:TextSymbol Id="o60">
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
<o:TextSymbol Id="o61">
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
<o:TextSymbol Id="o62">
<a:Text>&lt;&lt; extend &gt;&gt;</a:Text>
<a:CreationDate>1531476438</a:CreationDate>
<a:ModificationDate>1531752603</a:ModificationDate>
<a:Rect>((1126,-486), (5925,3113))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o63">
<a:Text>&lt;&lt;extend&gt;&gt;</a:Text>
<a:CreationDate>1531476536</a:CreationDate>
<a:ModificationDate>1531752590</a:ModificationDate>
<a:Rect>((16051,1464), (20850,5063))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o64">
<a:Text>&lt;&lt;include&gt;&gt;
</a:Text>
<a:CreationDate>1531476771</a:CreationDate>
<a:ModificationDate>1531752500</a:ModificationDate>
<a:Rect>((-1724,-10424), (3075,-6825))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>7</a:DashStyle>
<a:FillColor>16711808</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
</o:TextSymbol>
<o:TextSymbol Id="o65">
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
<o:TextSymbol Id="o66">
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
<o:UseCaseAssociationSymbol Id="o67">
<a:CreationDate>1531476046</a:CreationDate>
<a:ModificationDate>1531751683</a:ModificationDate>
<a:Rect>((-28875,-6328), (-14273,-5953))</a:Rect>
<a:ListOfPoints>((-28875,-6328),(-23288,-6328),(-23288,-5953),(-14273,-5953))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o51"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o68"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o69">
<a:CreationDate>1531476048</a:CreationDate>
<a:ModificationDate>1531751595</a:ModificationDate>
<a:Rect>((-28650,-8241), (-10800,-6150))</a:Rect>
<a:ListOfPoints>((-28650,-6150),(-28650,-8241),(-10800,-8241))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o41"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o70"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o71">
<a:CreationDate>1531476055</a:CreationDate>
<a:ModificationDate>1531750749</a:ModificationDate>
<a:Rect>((-29250,5738), (-12600,10324))</a:Rect>
<a:ListOfPoints>((-29250,5738),(-29250,10324),(-12600,10324))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o72"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o73"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o74">
<a:CreationDate>1531476067</a:CreationDate>
<a:ModificationDate>1531750888</a:ModificationDate>
<a:Rect>((-29850,7186), (-9750,7725))</a:Rect>
<a:ListOfPoints>((-29850,7725),(-20624,7725),(-20624,7186),(-9750,7186))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o24"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o75"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o76">
<a:CreationDate>1531476260</a:CreationDate>
<a:ModificationDate>1531752017</a:ModificationDate>
<a:Rect>((-29100,4144), (-7463,6000))</a:Rect>
<a:ListOfPoints>((-29100,6000),(-19451,6000),(-19451,4144),(-7463,4144))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o31"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o77"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o78">
<a:CreationDate>1531477117</a:CreationDate>
<a:ModificationDate>1531753004</a:ModificationDate>
<a:Rect>((-28875,16312), (-13350,17287))</a:Rect>
<a:ListOfPoints>((-28875,17287),(-28875,16312),(-13350,16312))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o79"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o17"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o80"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:UseCaseAssociationSymbol Id="o81">
<a:CreationDate>1531477120</a:CreationDate>
<a:ModificationDate>1531753004</a:ModificationDate>
<a:Rect>((-29100,18600), (-12450,19350))</a:Rect>
<a:ListOfPoints>((-29100,18600),(-20775,18600),(-20775,19350),(-12450,19350))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>16744448</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o79"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o82"/>
</c:DestinationSymbol>
<c:Object>
<o:UseCaseAssociation Ref="o83"/>
</c:Object>
</o:UseCaseAssociationSymbol>
<o:GeneralizationSymbol Id="o84">
<a:CreationDate>1531477199</a:CreationDate>
<a:ModificationDate>1531751956</a:ModificationDate>
<a:Rect>((-30916,-17700), (-29909,-7575))</a:Rect>
<a:ListOfPoints>((-30375,-17700),(-30450,-7575))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o54"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o10"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o85"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o86">
<a:CreationDate>1531477250</a:CreationDate>
<a:ModificationDate>1531753004</a:ModificationDate>
<a:Rect>((-30725,8100), (-29725,17325))</a:Rect>
<a:ListOfPoints>((-30300,8100),(-30300,12300),(-30150,12300),(-30150,17325))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o79"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o87"/>
</c:Object>
</o:GeneralizationSymbol>
<o:ExtendedDependencySymbol Id="o88">
<a:CreationDate>1531477572</a:CreationDate>
<a:ModificationDate>1531477612</a:ModificationDate>
<a:Rect>((-1950,5100), (36750,19050))</a:Rect>
<a:ListOfPoints>((-1950,19050),(36750,19050),(36750,5100))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o82"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o89"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o90">
<a:CreationDate>1531477575</a:CreationDate>
<a:ModificationDate>1531751474</a:ModificationDate>
<a:Rect>((21075,4950), (35025,16125))</a:Rect>
<a:ListOfPoints>((21075,16125),(35025,16125),(35025,4950))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o21"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o91"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o92">
<a:CreationDate>1531477577</a:CreationDate>
<a:ModificationDate>1531752995</a:ModificationDate>
<a:Rect>((24185,4500), (33825,6522))</a:Rect>
<a:ListOfPoints>((24185,6522),(28725,6522),(28725,4500),(33825,4500))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o28"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o93"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o94">
<a:CreationDate>1531477587</a:CreationDate>
<a:ModificationDate>1531752916</a:ModificationDate>
<a:Rect>((27490,2922), (35325,3522))</a:Rect>
<a:ListOfPoints>((27490,3222),(35325,3222))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o38"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o95"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o96">
<a:CreationDate>1531477596</a:CreationDate>
<a:ModificationDate>1531752583</a:ModificationDate>
<a:Rect>((9000,300), (36375,1800))</a:Rect>
<a:ListOfPoints>((9000,300),(36375,300),(36375,1800))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o35"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o97"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ExtendedDependencySymbol Id="o98">
<a:CreationDate>1531477603</a:CreationDate>
<a:ModificationDate>1531750641</a:ModificationDate>
<a:Rect>((15825,-8925), (37425,1800))</a:Rect>
<a:ListOfPoints>((15825,-8925),(37425,-8925),(37425,1800))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>16744576</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJXSTR 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UseCaseSymbol Ref="o42"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UseCaseSymbol Ref="o48"/>
</c:DestinationSymbol>
<c:Object>
<o:ExtendedDependency Ref="o99"/>
</c:Object>
</o:ExtendedDependencySymbol>
<o:ActorSymbol Id="o54">
<a:CreationDate>1531475381</a:CreationDate>
<a:ModificationDate>1531751927</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-32250,-19612), (-27451,-16013))</a:Rect>
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
<o:Actor Ref="o100"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o14">
<a:CreationDate>1531475384</a:CreationDate>
<a:ModificationDate>1531750749</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-32325,4988), (-27526,8587))</a:Rect>
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
<o:Actor Ref="o101"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o10">
<a:CreationDate>1531475392</a:CreationDate>
<a:ModificationDate>1531750711</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-31875,-7612), (-27076,-4013))</a:Rect>
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
<o:Actor Ref="o102"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o79">
<a:CreationDate>1531475397</a:CreationDate>
<a:ModificationDate>1531753004</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-31725,16988), (-26926,20587))</a:Rect>
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
<o:Actor Ref="o103"/>
</c:Object>
</o:ActorSymbol>
<o:UseCaseSymbol Id="o41">
<a:CreationDate>1531475417</a:CreationDate>
<a:ModificationDate>1531751595</a:ModificationDate>
<a:Rect>((-17773,-10763), (-5249,-8175))</a:Rect>
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
<o:UseCase Ref="o104"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o51">
<a:CreationDate>1531475419</a:CreationDate>
<a:ModificationDate>1531753022</a:ModificationDate>
<a:Rect>((-17175,-6563), (-5699,-3825))</a:Rect>
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
<o:UseCase Ref="o105"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o42">
<a:CreationDate>1531475424</a:CreationDate>
<a:ModificationDate>1531750641</a:ModificationDate>
<a:Rect>((8774,-10500), (16800,-6900))</a:Rect>
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
<o:UseCase Ref="o106"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o11">
<a:CreationDate>1531475425</a:CreationDate>
<a:ModificationDate>1531751685</a:ModificationDate>
<a:Rect>((-19425,-3413), (-3525,-637))</a:Rect>
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
<o:UseCase Ref="o107"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o72">
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
<o:UseCase Ref="o108"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o24">
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
<o:UseCase Ref="o109"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o25">
<a:CreationDate>1531475946</a:CreationDate>
<a:ModificationDate>1531752907</a:ModificationDate>
<a:Rect>((7350,5288), (13800,8221))</a:Rect>
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
<o:UseCase Ref="o110"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o28">
<a:CreationDate>1531475948</a:CreationDate>
<a:ModificationDate>1531752995</a:ModificationDate>
<a:Rect>((18750,5286), (25800,8146))</a:Rect>
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
<o:UseCase Ref="o111"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o31">
<a:CreationDate>1531475948</a:CreationDate>
<a:ModificationDate>1531752017</a:ModificationDate>
<a:Rect>((-11250,3001), (-3676,5288))</a:Rect>
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
<o:UseCase Ref="o112"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o82">
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
<o:UseCase Ref="o113"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o17">
<a:CreationDate>1531475950</a:CreationDate>
<a:ModificationDate>1531751461</a:ModificationDate>
<a:Rect>((-15076,15675), (-5400,17662))</a:Rect>
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
<o:UseCase Ref="o114"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o18">
<a:CreationDate>1531475951</a:CreationDate>
<a:ModificationDate>1531751479</a:ModificationDate>
<a:Rect>((675,15263), (8175,18000))</a:Rect>
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
<o:UseCase Ref="o115"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o32">
<a:CreationDate>1531476284</a:CreationDate>
<a:ModificationDate>1531752698</a:ModificationDate>
<a:Rect>((1201,2671), (8325,5588))</a:Rect>
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
<o:UseCase Ref="o116"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o35">
<a:CreationDate>1531476389</a:CreationDate>
<a:ModificationDate>1531752583</a:ModificationDate>
<a:Rect>((6450,-413), (12451,2663))</a:Rect>
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
<o:UseCase Ref="o117"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o38">
<a:CreationDate>1531476481</a:CreationDate>
<a:ModificationDate>1531752916</a:ModificationDate>
<a:Rect>((22426,1835), (28426,4171))</a:Rect>
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
<o:UseCase Ref="o118"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o21">
<a:CreationDate>1531476962</a:CreationDate>
<a:ModificationDate>1531751474</a:ModificationDate>
<a:Rect>((12301,14775), (21525,17326))</a:Rect>
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
<o:UseCase Ref="o119"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o48">
<a:CreationDate>1531477527</a:CreationDate>
<a:ModificationDate>1531477527</a:ModificationDate>
<a:Rect>((33000,1125), (40199,6524))</a:Rect>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777152</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:UseCase Ref="o120"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o45">
<a:CreationDate>1531751008</a:CreationDate>
<a:ModificationDate>1531751228</a:ModificationDate>
<a:Rect>((-14925,12375), (-6299,14550))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777152</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o121"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o122">
<a:CreationDate>1531751013</a:CreationDate>
<a:ModificationDate>1531752027</a:ModificationDate>
<a:Rect>((-14251,374), (-4875,2401))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777152</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o123"/>
</c:Object>
</o:UseCaseSymbol>
<o:UseCaseSymbol Id="o55">
<a:CreationDate>1531751021</a:CreationDate>
<a:ModificationDate>1531753328</a:ModificationDate>
<a:Rect>((-15150,-17550), (-5926,-15150))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>16744448</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777152</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:UseCase Ref="o124"/>
</c:Object>
</o:UseCaseSymbol>
</c:Symbols>
</o:UseCaseDiagram>
</c:UseCaseDiagrams>
<c:Generalizations>
<o:Generalization Id="o85">
<a:ObjectID>F8C5C7D8-3A98-4AE7-9F5C-7ACDB35E3DFE</a:ObjectID>
<a:Name>Generalisation_1</a:Name>
<a:Code>Generalisation_1</a:Code>
<a:CreationDate>1531477199</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477199</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o102"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o100"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o87">
<a:ObjectID>E7A990D8-E856-4762-96AD-7B4B5C17CA50</a:ObjectID>
<a:Name>Generalisation_4</a:Name>
<a:Code>Generalisation_4</a:Code>
<a:CreationDate>1531477250</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477250</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o103"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o101"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o15">
<a:ObjectID>6EDBCA90-334B-4C3D-8E1C-815A879506A2</a:ObjectID>
<a:Name>Generalisation_3</a:Name>
<a:Code>Generalisation_3</a:Code>
<a:CreationDate>1531750468</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750468</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:Actor Ref="o101"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o102"/>
</c:Object2>
</o:Generalization>
</c:Generalizations>
<c:Dependencies>
<o:Dependency Id="o19">
<a:ObjectID>CA870C69-B608-4294-841F-86861C9AF7E8</a:ObjectID>
<a:Name>Dependance_1</a:Name>
<a:Code>Dependance_1</a:Code>
<a:CreationDate>1531750556</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750556</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o115"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o114"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o22">
<a:ObjectID>ED1B1753-6EDC-4524-8AE7-395DC387B9FA</a:ObjectID>
<a:Name>Dependance_2</a:Name>
<a:Code>Dependance_2</a:Code>
<a:CreationDate>1531750558</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750558</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o119"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o115"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o26">
<a:ObjectID>6CCB95BD-4115-459E-A818-D382089C7B0A</a:ObjectID>
<a:Name>Dependance_3</a:Name>
<a:Code>Dependance_3</a:Code>
<a:CreationDate>1531750560</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750560</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o110"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o109"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o29">
<a:ObjectID>264184C2-8776-4742-A5F5-A15B74441464</a:ObjectID>
<a:Name>Dependance_4</a:Name>
<a:Code>Dependance_4</a:Code>
<a:CreationDate>1531750561</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750561</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o111"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o110"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o33">
<a:ObjectID>F44865EE-8AF3-4221-A6FB-81DB5423EFEA</a:ObjectID>
<a:Name>Dependance_5</a:Name>
<a:Code>Dependance_5</a:Code>
<a:CreationDate>1531750563</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750563</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o116"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o112"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o36">
<a:ObjectID>E07868BD-4CCA-44B5-846D-8BD0CA880065</a:ObjectID>
<a:Name>Dependance_6</a:Name>
<a:Code>Dependance_6</a:Code>
<a:CreationDate>1531750566</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750566</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o117"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o116"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o39">
<a:ObjectID>34E54F42-319B-4B3E-A223-D9094C4FD5F7</a:ObjectID>
<a:Name>Dependance_7</a:Name>
<a:Code>Dependance_7</a:Code>
<a:CreationDate>1531750572</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750572</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o118"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o111"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o46">
<a:ObjectID>870E2CB3-24D2-4983-A348-C8BA4616A05D</a:ObjectID>
<a:Name>Dependance_8</a:Name>
<a:Code>Dependance_8</a:Code>
<a:CreationDate>1531751178</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531751178</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o119"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o121"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o49">
<a:ObjectID>9F37E3DA-BF6B-48AA-A2E6-2FBEE56C2552</a:ObjectID>
<a:Name>Dependance_9</a:Name>
<a:Code>Dependance_9</a:Code>
<a:CreationDate>1531751657</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531751657</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o107"/>
</c:Object2>
</o:Dependency>
<o:Dependency Id="o52">
<a:ObjectID>3AAC43CC-FD33-4224-AD4B-3CFD7C243B82</a:ObjectID>
<a:Name>Dependance_10</a:Name>
<a:Code>Dependance_10</a:Code>
<a:CreationDate>1531751663</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531751663</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o105"/>
</c:Object2>
</o:Dependency>
</c:Dependencies>
<c:Actors>
<o:Actor Id="o100">
<a:ObjectID>C662E4EC-B029-4EDA-B1A1-2488069F7153</a:ObjectID>
<a:Name>Admine</a:Name>
<a:Code>Admine</a:Code>
<a:CreationDate>1531475381</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476700</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o101">
<a:ObjectID>16771662-5F65-447E-A129-397ED56AB72B</a:ObjectID>
<a:Name>Chef_Projet</a:Name>
<a:Code>Chef_Projet</a:Code>
<a:CreationDate>1531475384</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476657</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o102">
<a:ObjectID>E271A0E9-99E0-4308-BDD6-8EA380ABB48D</a:ObjectID>
<a:Name>Gérant</a:Name>
<a:Code>Gerant</a:Code>
<a:CreationDate>1531475392</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476690</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:Actor>
<o:Actor Id="o103">
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
<o:UseCase Id="o104">
<a:ObjectID>B2D412B7-1726-4DCC-BF47-9A21377104F7</a:ObjectID>
<a:Name>modifier utilisateur</a:Name>
<a:Code>modifier_utilisateur</a:Code>
<a:CreationDate>1531475417</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475595</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o105">
<a:ObjectID>AA3BECCB-402F-45A0-BB0E-F244B9248FA6</a:ObjectID>
<a:Name>Ajouter utilisateur</a:Name>
<a:Code>Ajouter_utilisateur</a:Code>
<a:CreationDate>1531475419</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475611</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o106">
<a:ObjectID>064478A3-372F-4E65-9FDE-9E7F46B9CF1D</a:ObjectID>
<a:Name>utilisateur existe</a:Name>
<a:Code>utilisateur_existe</a:Code>
<a:CreationDate>1531475424</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476745</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o107">
<a:ObjectID>46B487CF-F8F1-451B-8246-D933495D3812</a:ObjectID>
<a:Name>Voir les projets des Chef_projet</a:Name>
<a:Code>Voir_les_projets_des_Chef_projet</a:Code>
<a:CreationDate>1531475425</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475775</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o108">
<a:ObjectID>2C3642B5-E328-47FF-911A-AC18963D2E88</a:ObjectID>
<a:Name>Générer Rapport d&#39;un Projet</a:Name>
<a:Code>Generer_Rapport_d_un_Projet</a:Code>
<a:CreationDate>1531475426</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475855</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o109">
<a:ObjectID>F301998F-EE24-49B3-A106-384ADA4DFA22</a:ObjectID>
<a:Name>Attribuer une Tache à un Employé</a:Name>
<a:Code>Attribuer_une_Tache_a_un_Employe</a:Code>
<a:CreationDate>1531475427</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531475926</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o110">
<a:ObjectID>A30D32B7-7D6A-4A88-837C-0E3B83209C34</a:ObjectID>
<a:Name>Ajout Tache</a:Name>
<a:Code>Ajout_Tache</a:Code>
<a:CreationDate>1531475946</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476029</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o111">
<a:ObjectID>D7E22289-4EC6-4945-9401-EA1CA9601F97</a:ObjectID>
<a:Name>Ajout Projet</a:Name>
<a:Code>Ajout_Projet</a:Code>
<a:CreationDate>1531475948</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476169</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o112">
<a:ObjectID>8F3D5E05-1B50-4E83-8155-8605A044816D</a:ObjectID>
<a:Name>Modifier Tache</a:Name>
<a:Code>Modifier_Tache</a:Code>
<a:CreationDate>1531475948</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476247</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o113">
<a:ObjectID>B863B1AD-CF7C-465A-826B-5D1910A4450F</a:ObjectID>
<a:Name>Voir Calendrier des Projets</a:Name>
<a:Code>Voir_Calendrier_des_Projets</a:Code>
<a:CreationDate>1531475949</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476843</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o114">
<a:ObjectID>8553D8DF-7908-45C8-A82E-61424EBC5FF9</a:ObjectID>
<a:Name>modifier tache</a:Name>
<a:Code>modifier_tache</a:Code>
<a:CreationDate>1531475950</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750963</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o115">
<a:ObjectID>931BF36C-650B-46FD-A57B-1EEFEE2B951D</a:ObjectID>
<a:Name>avoir Tache</a:Name>
<a:Code>avoir_Tache</a:Code>
<a:CreationDate>1531475951</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476934</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o116">
<a:ObjectID>C5077BB7-0B11-4CD8-8423-F01C1ACB4846</a:ObjectID>
<a:Name>Trouver Tache</a:Name>
<a:Code>Trouver_Tache</a:Code>
<a:CreationDate>1531476284</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531752694</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o117">
<a:ObjectID>1E5D3595-1C62-45B1-AFEC-865780E0E890</a:ObjectID>
<a:Name>Voir Tache</a:Name>
<a:Code>Voir_Tache</a:Code>
<a:CreationDate>1531476389</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476409</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o118">
<a:ObjectID>4D626A5C-F194-4B3E-B491-FC7A17EEA787</a:ObjectID>
<a:Name>Voir Projet</a:Name>
<a:Code>Voir_Projet</a:Code>
<a:CreationDate>1531476481</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476504</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o119">
<a:ObjectID>D39D9DC8-4EB3-4091-90CF-BA84BC3CAEBA</a:ObjectID>
<a:Name>appartient à Projet</a:Name>
<a:Code>appartient_a_Projet</a:Code>
<a:CreationDate>1531476962</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477006</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o120">
<a:ObjectID>56F755FD-10C3-4E14-8D5F-E9133A0084A3</a:ObjectID>
<a:Name>s&#39;authentifier</a:Name>
<a:Code>s_authentifier</a:Code>
<a:CreationDate>1531477527</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477544</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o121">
<a:ObjectID>14772968-0334-4F8E-883B-7408A2DFF78E</a:ObjectID>
<a:Name>voir Tache</a:Name>
<a:Code>voir_Tache</a:Code>
<a:CreationDate>1531751008</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531751102</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o123">
<a:ObjectID>508B23AB-BAC0-4340-BE85-FE4D157AAEA8</a:ObjectID>
<a:Name>cloturer Projet</a:Name>
<a:Code>cloturer_Projet</a:Code>
<a:CreationDate>1531751013</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531751912</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
<o:UseCase Id="o124">
<a:ObjectID>589D3C10-DD4D-4FD2-B6B1-13E8C7BC3C4C</a:ObjectID>
<a:Name>Ajouter Gérant</a:Name>
<a:Code>Ajouter_Gerant</a:Code>
<a:CreationDate>1531751021</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531753326</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
</o:UseCase>
</c:UseCases>
<c:UseCaseAssociations>
<o:UseCaseAssociation Id="o68">
<a:ObjectID>0DAA4FAF-26D3-4D09-A10A-446E3D7E2F03</a:ObjectID>
<a:Name>Association_1</a:Name>
<a:Code>Association_1</a:Code>
<a:CreationDate>1531476046</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476046</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o105"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o102"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o70">
<a:ObjectID>1BF4D889-1B54-4EFC-BFEA-3DAEB32887C9</a:ObjectID>
<a:Name>Association_2</a:Name>
<a:Code>Association_2</a:Code>
<a:CreationDate>1531476048</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476048</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o104"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o102"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o73">
<a:ObjectID>1CB03C04-31A9-46FB-AF52-6E335C1C16AF</a:ObjectID>
<a:Name>Association_4</a:Name>
<a:Code>Association_4</a:Code>
<a:CreationDate>1531476055</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476055</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o108"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o101"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o75">
<a:ObjectID>FA2CE9DB-E28D-448C-84A4-C8D7B8823F6A</a:ObjectID>
<a:Name>Association_5</a:Name>
<a:Code>Association_5</a:Code>
<a:CreationDate>1531476067</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476067</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o109"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o101"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o77">
<a:ObjectID>C3271572-9E49-4AE3-8B5E-725C7AF5E937</a:ObjectID>
<a:Name>Association_6</a:Name>
<a:Code>Association_6</a:Code>
<a:CreationDate>1531476260</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531476260</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o112"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o101"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o80">
<a:ObjectID>723416B9-76ED-40FD-823B-ED17AB1E6C81</a:ObjectID>
<a:Name>Association_7</a:Name>
<a:Code>Association_7</a:Code>
<a:CreationDate>1531477117</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477117</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o114"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o103"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o83">
<a:ObjectID>F3C97898-CAEC-4BAA-B6B2-9BA0F937D7FF</a:ObjectID>
<a:Name>Association_8</a:Name>
<a:Code>Association_8</a:Code>
<a:CreationDate>1531477120</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477120</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o113"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o103"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o12">
<a:ObjectID>EF1E2D0A-07DE-43C9-8775-0F93211DF78A</a:ObjectID>
<a:Name>Association_9</a:Name>
<a:Code>Association_9</a:Code>
<a:CreationDate>1531750449</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750449</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o107"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o102"/>
</c:Object2>
</o:UseCaseAssociation>
<o:UseCaseAssociation Id="o56">
<a:ObjectID>70A4901D-B2D4-429B-B464-17CCD8A72C41</a:ObjectID>
<a:Name>Association_10</a:Name>
<a:Code>Association_10</a:Code>
<a:CreationDate>1531753342</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531753342</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o124"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o100"/>
</c:Object2>
</o:UseCaseAssociation>
</c:UseCaseAssociations>
<c:ChildExtendedDependencies>
<o:ExtendedDependency Id="o89">
<a:ObjectID>5103132F-51A1-45DD-B9A4-3C3AA2E9C41E</a:ObjectID>
<a:CreationDate>1531477572</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477572</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o113"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o91">
<a:ObjectID>78907210-D169-425B-A031-57D434FD5F5B</a:ObjectID>
<a:CreationDate>1531477575</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477575</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o119"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o93">
<a:ObjectID>CB1553E6-20A5-4C46-AB37-CD1B3EE52DDD</a:ObjectID>
<a:CreationDate>1531477577</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477577</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o111"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o95">
<a:ObjectID>1E055EFD-7D15-4ED9-A2E4-256C24F91031</a:ObjectID>
<a:CreationDate>1531477587</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477587</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o118"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o97">
<a:ObjectID>8A1C6CFA-3A8E-4F67-A38F-C86DDDAC5355</a:ObjectID>
<a:CreationDate>1531477596</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477596</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o117"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o99">
<a:ObjectID>E2893052-6184-416E-81B8-8FB5352A4043</a:ObjectID>
<a:CreationDate>1531477603</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531477603</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o106"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o43">
<a:ObjectID>82B9AC0F-6A53-45C6-ADD8-6CCEAEF8DE3B</a:ObjectID>
<a:CreationDate>1531750617</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531750617</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o106"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o104"/>
</c:Object2>
</o:ExtendedDependency>
<o:ExtendedDependency Id="o58">
<a:ObjectID>1F718403-47D2-46A0-ABBB-7C5C86B67129</a:ObjectID>
<a:CreationDate>1531753346</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531753346</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<c:Object1>
<o:UseCase Ref="o120"/>
</c:Object1>
<c:Object2>
<o:UseCase Ref="o124"/>
</c:Object2>
</o:ExtendedDependency>
</c:ChildExtendedDependencies>
<c:TargetModels>
<o:TargetModel Id="o125">
<a:ObjectID>F763F3C6-A949-46AE-86A7-84A7382CF9EB</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1531475346</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531492690</a:ModificationDate>
<a:Modifier>emsi-pc</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java5-j2ee14.xol</a:TargetModelURL>
<a:TargetModelID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o126">
<a:ObjectID>F21CAA15-0AF0-45A1-9644-EC48F2AD93C4</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1531475348</a:CreationDate>
<a:Creator>emsi-pc</a:Creator>
<a:ModificationDate>1531492690</a:ModificationDate>
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