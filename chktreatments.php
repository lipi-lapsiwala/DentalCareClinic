<?php
$i=$_GET['i'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Treatments</title>
</head>

<body>

<table width=900 align=center cellpadding=0 cellspacing=0 border=0>

<tr><td><div>
	<?php
	include"header1.php";
	?>
	</div>
</td></tr>
        

<tr align="center"><td>
	<table width="600" border="0" cellspacing="0" cellpadding="5">
      
     <?php
     if($i==1)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Root Canal</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 A root canal is the anatomic space within the root of a tooth. Part of a naturally occurring space within a tooth, it consists of the pulp chamber (within the coronal part of the tooth), the main canal(s), and more intricate anatomical branches that may connect the root canals to each other or to the surface of the root.
	 </td></tr><tr><td align=center><img src=images/img1.png align=center>";
	 
	 else if($i==2)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Light Cured Composite Filling</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 A dental curing light is a piece of dental equipment that is used for polymerization of light cure resin based composites.It can be used on several different dental materials that are curable by light. The light used falls under the visible blue light spectrum. This light is delivered over a range of wavelengths and varies for each type of device. There are four basic types of dental curing lights; the Tungsten halogen and light-emitting diode (LED), plasma arc curing (PAC), and laser. The two main dental curing lights are the halogen and LED.
</td></tr><tr><td align=center><img src=images/img2.jpg align=center>
";

     else if($i==3)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Post & Core</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 A post and core is a type of dental restoration that is utilized when there is inadequate tooth structure remaining to support a traditional restoration. A small rod, usually metal, is inserted into the root space of the tooth and protrudes from the root a couple of millimeters. This rod is referred to as a post. The post is then used to hold a filling, or core, in place. Without this post there would not have been enough tooth structure remaining to hold the filling required. Oftentimes, the post and core is covered with a crown.
</td></tr><tr><td align=center><img src=images/img3.jpg align=center>	 
	 ";

	 else if($i==4)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Zirconia Crown</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 The aesthetic effects alone of a zirconia crown should be the biggest advantage it can give. It is important that you have dental crowns that will look natural especially if it will be placed at the front teeth and will be visible beside the natural teeth.

The capacity of zirconium to be modified according to the set of teeth it will be placed alongside with is very important. Zirconium crown will not only replace a tooth but it can shaped so that it will look better than the one it will be replacing with. This therefore is why you can sport that perfect natural looking smile anytime.

Zirconia manufacturers are now producing and designing dental crowns custom milled from solid block of the material and baked at ultra high temperatures to ensure that the finished crowns are almost indestructible.

The fact that this material is biocompatible means that it is safe to stay within your mouth for a long time. There is no need to worry about any adverse reactions from your body because it is not rejected by the human body.
</td></tr><tr><td align=center>
<img src=images/img4.jpg align=center>
";

	 else if($i==5)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Ceramic Crowns</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 A dental crown is a tooth-shaped cap that is placed over a tooth -- to cover the tooth to restore its shape and size, strength, and improve its appearance.

The crowns, when cemented into place, fully encase the entire visible portion of a tooth that lies at and above the gum line.
</td></tr><tr><td align=center>
<img src=images/img5.jpg align=center>
";

	 else if($i==6)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Veeneers & Laminates</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 Dental veneers (sometimes called porcelain veneers or dental porcelain laminates) are wafer-thin, custom-made shells of tooth-colored materials designed to cover the front surface of teeth to improve your appearance. These shells are bonded to the front of the teeth changing their color, shape, size, or length.

Dental veneers can be made from porcelain or from resin composite materials. Porcelain veneers resist stains better than resin veneers and better mimic the light reflecting properties of natural teeth. Resin veneers are thinner and require removal of less of the tooth surface before placement. You will need to discuss the best choice of veneer material for you with your dentist.
</td></tr><tr><td align=center>
<img src=images/img6.jpg align=center>
";

	 else if($i==7)
	 echo "";

	 else if($i==8)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Tooth Bleaching</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 Dental bleaching, also known as tooth whitening, is a common procedure in general dentistry. According to the FDA, whitening restores natural tooth color and bleaching whitens beyond the natural color. There are many methods available, such as brushing, bleaching strips, bleaching pen, bleaching gel, and laser bleaching. Teeth whitening has become the most requested procedure in cosmetic dentistry today. More than 100 million Americans whiten their teeth one way or another; spending an estimated $15 billion in 2010.[1]

Bleaching methods use carbamide peroxide which reacts with water to form hydrogen peroxide. Carbamide peroxide has about a third of the strength of hydrogen peroxide. This means that a 15% solution of carbamide peroxide is the rough equivalent of a 5% solution of hydrogen peroxide. The peroxide oxidizing agent penetrates the porosities in the rod-like crystal structure of enamel and breaks down stain deposits in the dentin. Power bleaching uses light to accelerate the process of bleaching in a dental office. Another bleaching agent is 6-phthalimido peroxy hexanoic acid (PAP).
</td></tr><tr><td align=center>
<img src=images/img8.jpg align=center>

";

	 else if($i==9)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Scaling & Oral Prohylaxis</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 Scaling and root planing, otherwise known as conventional periodontal therapy, non-surgical periodontal therapy, or deep cleaning, is the process of removing or eliminating the etiologic agents – dental plaque, its products, and calculus – which cause inflammation, thus helping to establish a periodontium that is free of disease. Periodontal scalers and periodontal curettes are some of the tools involved.
</td></tr><tr><td align=center>
<img src=images/img9.jpg align=center>
	 
	 ";

	 else if($i==10)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Treatment of Diseases related to Gums</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 Periodontal disease, commonly known as gum disease, is caused by bacteria in plaque.  If not consistently removed, this bacteria builds up, infecting your teeth, gums, and eventually the bone that supports your teeth - a common cause of tooth loss.  This disease has three stages of progression: gingivitis, periodontitis, and advanced periodontitis; the longer the disease has to advance, the more damage it causes.  Fear not, your Phoenix dentist is here to help.  With advancements in detection and treatment, we can discover periodontal disease early and begin treatment before complicated issues arise.
</td></tr><tr><td align=center>
<img src=images/img10.jpg align=center>
	 
	 ";

	 else if($i==11)
	 echo "<tr align=center>
        <td colspan=2><br><h3>Diastema Closure</h3></td>
        </tr>
     <tr>
     <td align=justify>
	 
A “diastema” is a dental term referring to a space or gap between two teeth.  It is most commonly applied to the space found between the two maxillary central incisor teeth (upper front teeth). Diastemas can be caused by a number of factors, including genetics, a tooth size discrepancy, a low muscle attachment between teeth known as a frenum, tongue thrusting, or spreading of teeth due to gum disease (periodontal disease). Traditionally, the treatment of a diastema involved the use of orthodontic therapy, or braces, lasting twelve to twenty-four months depending upon the severity.  However, with new advances in modern cosmetic dental procedures, diastemas can often be corrected in as little as two painless visits!

 
Diastema's can be found in a dental arch that has generalized spacing between many teeth.  More commonly, diastema's appear as a single space between the front teeth with all other teeth in the arch being in a normal contact relationship. 
</td></tr><tr><td align=center>
<img src=images/img11.jpg align=center>

	 ";

	 else if($i==12)
	 echo "
	 <tr align=center>
        <td colspan=2><br><h3>Tooth Replacement</h3></td>
        </tr>
     <tr>
     <td align=justify>
If you have missing teeth, you may choose to do nothing and leave the space empty. Alternatively, you may want to replace them. Treatment options include the following.

Dentures (false teeth) – removable plastic or metal frameworks that carry false teeth.
Bridges – false teeth that are fixed onto adjacent natural teeth.
Dental implants – metal 'pegs' are placed in your jawbone, and dentures, crowns or bridges are clipped or screwed on top of them.
The most appropriate treatment for you will depend on the number of teeth you have missing. It will also depend on where teeth are missing in your mouth and the condition of any remaining teeth. Your dentist will help you decide which option is best for you.
</td></tr><tr><td align=center>
<img src=images/img12.png align=center>
	 
	 ";

	 ?>
     
     </td>
     </tr>
    </table>
</td>
</tr>

<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td>
	<?php
    include"footer.php";
    ?>
</table>

</body>
</html>
