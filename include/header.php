<!DOCTYPE html>
<html lang="en">
   <?php 
      include('include/config.php');
      $url = '/'.basename($_SERVER['PHP_SELF']);  
      ?>
   <head>
   
   
   <?php if($_SERVER['HTTP_HOST'] != 'localhost'){  ?>
		<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17844390114"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'AW-17844390114');

</script>

   
  
		<script>

		function gtag_report_conversion(url) {

		  var callback = function () {

			if (typeof(url) != 'undefined') {

			  window.location = url;

			}

		  };

		  gtag('event', 'conversion', {

			  'send_to': 'AW-17844390114/RvxaCJr4ktobEOKR77xC',

			  'value': 1.0,

			  'currency': 'INR',

			  'event_callback': callback

		  });

		  return false;

		}

		</script>
   
   
   
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-N91CLPT0FD"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag(){dataLayer.push(arguments);}
         
         gtag('js', new Date());
         
         gtag('config', 'G-N91CLPT0FD');
         
      </script>
	  
	  
	 <?php if($url == '/thanks.php'){ ?>
	  
	  <!-- Event snippet for Submit lead form conversion page -->

<script>

  gtag('event', 'conversion', {

      'send_to': 'AW-17844390114/RvxaCJr4ktobEOKR77xC',

      'value': 1.0,

      'currency': 'INR'

  });

</script>
	  
	  
	  
	  
	  
	  
   <?php  } }?>
      <meta charset="UTF-8">
      <meta property="og:site_name" content="Forge Auto International Limited"/>
      <?php if($url=="/index.php" || $url=="/" || $url=="/aint/"){ ?>
      <title>Automotive Parts Manufacturer - Agricultural Parts, Tractor Parts, Railway Parts, Wheel Assembly, Tie Rods, Striking Tools, Hydraulic Parts, Tractor Chassis, Forging Parts Manufacturers, Exporters & Suppliers in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best forging company in India. We are leading auto parts, forged agriculture parts, tractor & railway parts manufacturer, exporters and suppliers in India. Discover high quality tractor parts, agriculture parts, striking tools, harvester fingers, caster wheel parts, tractor chassis parts, propeller shafts, flange yoke, striking hand tools, chain links, tie rods, wheel assembly, agricultural equipment, combine parts and all types of forging parts.">
      <meta name="keywords" content="tractor parts, agriculture parts, striking tools, harvester fingers, caster wheel parts, tractor chassis parts, propeller shafts, flange yoke, striking hand tools, chain links, tie rods, wheel assembly, agricultural equipment, combine parts">
      <link rel="canonical" href="<?php echo BASEURL; ?>" />
      <?php }else if($url=="/about.php"){ ?>
      <title>About - Forge Auto International Limited</title>
      <meta name="description" content="Forge Auto International Limited is one of the biggest forging companies in India. We have well equipped and professionally managed unit offer best tractor parts, railway parts, auto parts and combine parts.">
      <meta name="keywords" content="best tractor parts, railway parts, auto parts and combine parts">
      <link rel="canonical" href="<?php echo BASEURL; ?>about.php" />
      <?php  } else if($url=="/milestone.php"){ ?>
      <title>Milestone - Forge Auto International Limited </title>
      <meta name="description" content="Forge Auto International Limited is one of the best automotive parts, tractor parts, combine parts, hydraulic & forging parts manufacturer in India.">
      <meta name="keywords" content="best automotive parts, tractor parts, combine parts, hydraulic & forging parts">
      <link rel="canonical" href="<?php echo BASEURL; ?>milestone.php" />
      <?php } else if($url=="/mission-vision-and-future-plans.php"){ ?>
      <title>Mission & Vision - Forge Auto International Limited</title>
      <meta name="description" content="Forge Auto International Limited explore emerging technology to bring new age solutions to our customers & serve their growing requirements with high quality forged components.">
      <meta name="keywords" content="mission, vision, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>mission-vision-and-future-plans.php" />
      <?php } else if($url=="/management.php"){ ?>
      <title>Management - Forge Auto International Limited</title>
      <meta name="description" content="Sh. Parmod Gupta - Chairman - He is the chairman and whole time director of the company. He is also one of our promoters of our company and has been associated with our company since its incorporation. ">
      <meta name="keywords" content="management, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>management.php" />
      <?php  }else if($url=="/quality-policy.php"){ ?>
      <title>Quality Policy - Forge Auto International Limited</title>
      <meta name="description" content="FAI is proud to be a symbol of best quality and state of the art technology in the industry.">
      <meta name="keywords" content="quality policy, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>quality-policy.php" />
      <?php }else if($url=="/infrastructure.php"){ ?>
      <title>Infrastructure - Forge Auto International Limited </title>
      <meta name="description" content="FAI keeps pace by updating the manufacturing facilities by inducing the latest technology like CAD/CAM, QFORM-Forging simulation software, 3d printer, standard room with all new allied instruments for checking, fully supported by hammers, electric screw presses, heat treatment facility, testing laboratory micro and macro tests.">
      <meta name="keywords" content="infrastructure, auto international">
      <link rel="canonical" href="<?php echo BASEURL; ?>infrastructure.php" />
      <?php }else if($url=="/exhibitions.php"){ ?>
      <title>Exhibitions - Forge Auto International Limited</title>
      <meta name="description" content="View latest exhibition by Forge Auto International Limited in India as well as globe.">
      <meta name="keywords" content="exhibitions, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>exhibitions.php" />
      <?php } else if($url=="/clients.php"){ ?>
      <title>Clients - Forge Auto International Limited</title>
      <meta name="description" content="We have great clients in India as well as globe. Some of our prestigious clients are Sonalika International, RSB Industries, Wipro, ACE, Tata Motors, Mahindra, Tafe, Isuzu, Ashok Leyland and many more.">
      <meta name="keywords" content="clients, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>clients.php" />
      <?php	 } else if($url=="/contact.php"){ ?>
      <title>Contact - Forge Auto International Limited</title>
      <meta name="description" content="Forge Auto International Limited is one of the leading auto parts, tractor parts, railway parts and forging parts manufacturer, exporters and suppliers in India. If you have any query related to our products or services then contact us at any time. ">
      <meta name="keywords" content="contact, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>contact.php" />
      <?php	} else if($url=="/technical-stuff.php"){ ?>
      <title>Technical Stuff - Forge Auto International Limited</title>
      <meta name="description" content="Raw Material Usage for manufacturing for various parts - EN 3A / EN 8 / EN 9 / EN 16 / EN 18 / EN 19 / EN 24 / En 36C / EN 353 / 42CrM04 / EN355 / 16Mn Cr5 / 20Mn Cr5 / SAE 8620 / AISI 1010 / 1015 / 1020 / 1025 / 1030 / 1035 / 1040 / 1045 / 1145 / 4140 / 4130 / 4145 / St52.3 / 40Cr4B / 41Cr4 etc.">
      <meta name="keywords" content="technical stuff, forge auto international limited">
      <?php }else if($url=="/auto-parts.php"){ ?>
      <title>Automotive Parts Manufacturer - Best Auto Parts,  Auto Parts Forging,  Auto Components Forgings Suppliers & Exporters in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best auto parts manufacturer & suppliers in India. Get a quote for high quality automotive parts, auto forging parts and all types of auto components.">
      <meta name="keywords" content="auto parts manufacturer, auto parts suppliers, automotive parts, best auto parts">
      <link rel="canonical" href="<?php echo BASEURL; ?>auto-parts.php" />
      <?php } else if($url=="/tractor-parts.php"){ ?>
      <title>Best Tractor Parts Manufacturer - Tractor Chassis Parts, Tractor Kingpin, Tractor Parts OEM Suppliers & Exporters in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the top tractor parts manufacturer company in India. Get a quote for best tractor parts, tractor kingpin & tractor chassis parts.">
      <meta name="keywords" content="best tractor parts, tractor kingpin, tractor chassis parts ">
      <link rel="canonical" href="<?php echo BASEURL; ?>tractor-parts.php" />
      <?php } else if($url=="/striking-tools.php"){ ?>
      <title>Striking Tools Manufacturers - Best Striking Tools, Striking Hand Tools Manufacturer, Exporters & Suppliers India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best striking tools manufacturer, exporters & suppliers in India. Get a quote for high quality striking tools & striking hand tools.">
      <meta name="keywords" content="striking tools manufacturer, striking tools suppliers, striking tools manufacturer">
      <link rel="canonical" href="<?php echo BASEURL; ?>striking-tools.php" />
      <?php } else if($url=="/hydraulic-parts.php"){ ?>
      <title>Hydraulic Parts Manufacturer - Heavy Forging, Hydraulic Parts Manufacturer, Exporters & Suppliers in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best hydraulic parts manufacturer, exporters & suppliers in India. Get a quote for high quality hydraulic parts & heavy forging.">
      <meta name="keywords" content="hydraulic parts manufacturer, hydraulic parts exporters">
      <link rel="canonical" href="<?php echo BASEURL; ?>hydraulic-parts.php" />
      <?php } else if($url=="/agriculture-parts.php"){ ?>
      <title>Agriculture Parts Manufacturer - Agriculture Tools, Agricultural Equipment, Forged Agriculture Parts Manufacturer, Exporters & Suppliers in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the leading agricultural tools manufacturer, exporters & suppliers in India. Get a quote for high quality agriculture tools, agricultural equipment and forged agriculture parts.">
      <meta name="keywords" content="agricultural tools manufacturer, agricultural equipment manufacturer ">
      <link rel="canonical" href="<?php echo BASEURL; ?>agriculture-parts.php" />
      <?php } else if($url=="/railway-parts.php"){ ?>
      <title>Railway Parts Manufactures - High Quality Railway Parts Suppliers & Exporters in India </title>
      <meta name="description" content="Forge Auto International Limited is one of the best railway parts manufacturer, exporters & suppliers in Ludhiana, India. Get a quote for high quality railway parts.">
      <meta name="keywords" content="railway parts manufacturer, railway parts suppliers in india">
      <link rel="canonical" href="<?php echo BASEURL; ?>railway-parts.php" />
      <?php } else if($url=="/chain-links.php"){ ?>
      <title>Chain Links Manufacturer - Top Chain Link Exporters & Suppliers in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best chain link manufacturer suppliers in India. Get a quote for high quality chain link.">
      <meta name="keywords" content="link chain manufacturer, link chain suppliers">
      <link rel="canonical" href="<?php echo BASEURL; ?>chain-links.php" />
      <?php }else if($url=="/wheel-assembly.php"){ ?>
      <title>Wheel Assembly Manufacturer - 5th Wheel Assembly Parts Suppliers and Exporters in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best wheel assembly manufacturer in India. Get high quality wheel assembly and 5th wheel assembly suppliers and exporters.">
      <meta name="keywords" content="wheel assembly, wheel assembly manufacturer">
      <link rel="canonical" href="<?php echo BASEURL; ?>wheel-assembly.php" />
      <?php }else if($url=="/tie-rods.php"){ ?>
      <title>Tie Rods Manufacturer - High Quality Tie Rods Suppliers & Exporters in India</title>
      <meta name="description" content="Forge Auto International Limited is one of the best tie rods manufacturer, exporters & suppliers India. Get a quote for tie rods.">
      <meta name="keywords" content="tie rods, tie rods manufacturer">
      <link rel="canonical" href="<?php echo BASEURL; ?>tie-rods.php" />
      <?php } else if($url=="/bod.php"){ ?>	
      <title>Composition of Board and Committees - Forge Auto International Limited</title>
      <meta name="description" content="Here you can view, Forge Auto International Limited, Composition of Board and Committees.">
      <meta name="keywords" content="composition of board and committees, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>bod.php" />
      <?php } else if($url=="/directorProfile.php"){ ?>	
      <title>Director Profile - Forge Auto International Limited</title>
      <meta name="description" content="Sh. Parmod Gupta - Managing Director - He is the chairman and whole time director of the company. He is also one of our promoters of our company and has been associated with our company since its incorporation.">
      <meta name="keywords" content="director profile, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>directorProfile.php" />
      <?php } else if($url=="/corporatePolicies.php"){ ?>	
      <title>Corporate Policies - Forge Auto International Limited</title>
      <meta name="description" content="Here you can view, Forge Auto International Limited corporate policies.">
      <meta name="keywords" content="corporate profile, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>corporatePolicies.php" />
      <?php } else if($url=="/prospectus.php"){ ?>
      <title>Prospectus - Forge Auto International Limited</title>
      <meta name="description" content="Here you can view, Forge Auto International Limited, prospectus.">
      <meta name="keywords" content="prospectus, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>prospectus.php" />
      <?php } else if($url=="/financialResults.php"){ ?>	
      <title>Financial Results - Forge Auto International Limited</title>
      <meta name="description" content="Financial results of Forge Auto International Limited.">
      <meta name="keywords" content="financial results, forge auto international limited">
      <link rel="canonical" href="<?php echo BASEURL; ?>financialResults.php" />
      <?php }else if($url=="/railway-parts-manufacturing"){ ?>
      <title>Staying on Track - How Forge Auto International Ltd. is Powering Progress in Railway Parts Manufacturing</title>
      <meta name="description" content="Discover how Forge Auto International Ltd. combines tradition with cutting-edge technology to manufacture durable and precisely designed railway parts.">
      <?php }else if($url=="/auto-parts-suppliers-in-india"){ ?>
      <title>Forge Auto - A Trusted Name Among Auto Parts Suppliers in India</title>
      <meta name="description" content="FAI Ltd.'s unwavering dedication to quality, innovation, and customer-centricity has solidified its reputation as a trusted name among auto parts suppliers in India.">
      <?php }else if($url=="/hydraulic-parts-used-in-the-automotive-industry"){ ?>
      <title>Forged for Power - Types of Hydraulic Parts Used in the Automotive Industry</title>
      <meta name="description" content="When strength, reliability, and performance matter, choose a trusted hydraulic parts manufacturer who understands the demands of modern mobility.">
      <?php }else if($url=="/forging-strength-for-indian-agriculture"){ ?>
      <title>Forging Strength for Indian Agriculture - Forge Auto International Ltd.</title>
      <meta name="description" content="FAI Ltd. isn’t just a name on a label-it’s a partner in progress. As one of the emerging tractors and agriculture implement parts manufacturers in India, the company is deeply rooted in the needs of Indian farmers.">
      <?php }else if($url=="/top-forging-manufacturers-in-india"){ ?>
      <title>Forging the Future - Top Forging Manufacturers in India</title>
      <meta name="description" content=" As the Forge Auto International Limited, continues to expand its capabilities and market reach, it solidifies its position among the top forging manufacturers in India, contributing significantly to the nation's industrial landscape.">
      <?php }else if($url=="/automotive-parts-manufacturer-in-india"){ ?>
      <title>How to Choose the Right Automotive Parts Manufacturer in India?</title>
      <meta name="description" content="FAI Ltd. exemplifies excellence across these parameters, making it a preferred partner for businesses seeking reliable and high-quality automotive components.">
      <?php }else if($url=="/key-components-that-keep-vehicles-moving"){ ?>
      <title>Inside the Driveshaft - Key Components That Keep Vehicles Moving</title>
      <meta name="description" content="Choose parts from trusted names in the business. And when you're looking for a flange yoke parts manufacturer that checks every box for quality, reliability, and technical excellence, FAI Ltd. is ready to deliver.">
      <?php }elseif($url=="/propeller-shafts-in-automobiles"){ ?>
      <title>Propeller Shafts in Automobiles - Definition and Importance</title>
      <meta name="description" content="Choosing a quality manufacturer like FAI Ltd. means choosing performance without compromise. When your power train needs a trusted link, FAI delivers with precision, durability, and engineering you can count on.">
      <?php }else if($url=="/blog"){ ?>
      <title>Official Blog - Forge Auto International Limited, Auto, Tractor, Railway & Forging Parts</title>
      <meta name="description" content="Welcome to the official blog of Forge Auto International, a leading Indian manufacturer of auto, tractor, railway, and forging parts.">
      <?php }else if($url=="/design-engineering.php"){ ?>
      <title>Design & Engineering for Automotive Parts - Forge Auto International</title>
      <meta name="description" content="Our Design & Engineering team at Forge Auto International transforms ideas into high-performance, cost-effective, and production-ready automotive parts. We specialize in collaborative co-development to turn your vision into a manufacturable reality.">
      <meta name="keywords" content="design engineering, infrastructure, design & engineering department">
      <?php }else if($url=="/forge-shop.php"){ ?>
      <title>Precision Forging Services - Forge Shop</title>
      <meta name="description" content="At Forge Auto International, we forge high-performance auto and hydraulic parts with unparalleled precision. Our forge shop combines controlled force and metallurgical discipline to deliver durable, custom-engineered components.">
      <meta name="keywords" content="forge shop, infrastructure, precision forging services">
      <?php }else if($url=="/press-shop.php"){ ?>
      <title>Precision Pressing & Stamping Services - Press Shop</title>
      <meta name="description" content="Our state-of-the-art press shop perfects forged automotive components with exacting accuracy. We specialize in precision pressing and stamping to achieve perfect geometry, tight tolerances, and superior surface finishes.">
      <meta name="keywords" content="metal stamping, precision pressing, automotive parts finishing">
      <?php }else if($url=="/ring-rollings.php"){ ?>
      <title>Forged Ring Rolling Services</title>
      <meta name="description" content="Engineered for strength and circular perfection, our ring rolling facility produces seamless forged rings with superior grain flow and uniform mechanical properties for high-performance applications.">
      <meta name="keywords" content="ring rolling, seamless forged rings, forged rings">
      <?php }else if($url=="/heat-treatment.php"){ ?>
      <title>Heat Treatment for Automotive Parts</title>
      <meta name="description" content="Our SCADA-enabled and CQI-9 approved in-house facility delivers precision heat treatment to ensure every automotive part has superior mechanical strength, durability, and dimensional stability.">
      <meta name="keywords" content="heat treatment services, automotive parts">
      <?php }else if($url=="/machine-shop.php"){ ?>
      <title>Precision Machining Services</title>
      <meta name="description" content="Our machine shop combines forged precision with machining excellence to deliver tight tolerances and complex geometries. We support everything from prototype development to large-scale production.">
      <meta name="keywords" content="precision machining services, forge auto international">
      <?php }else if($url=="/quality-checking.php"){ ?>
      <title>Quality & Inspection Instruments - Forge Auto International</title>
      <meta name="description" content="Quality isn't a checkpoint-it's a continuous commitment. Our advanced inspection systems ensure every forged and machined component meets global dimensional and material standards.">
      <meta name="keywords" content="quality checking instruments, infrastructure">
      <?php }else if($url=="/capabilities.php"){ ?>
      <title>Forging Capabilities & Capacity - Capabilities</title>
      <meta name="description" content="Our flexible infrastructure supports a forging capacity of 21,600 MT per annum. We are fully equipped to produce a diverse range of forged components, from 1 kg to 20 kg, in both carbon and alloy steels.">
      <meta name="keywords" content="capabilities, forging capabilities">
      <?php }else if($url=="/oil-gas-industry.php"){ ?>
      <title>Hammer Union, Fig 50, Fig 100, Fig 200, Fig 602, Fig 1502 Manufacturer, Exporters & Suppliers in India - Oil and Gas Industry</title>
      <meta name="description" content="Forge Auto International is a leading manufacturer and exporter of hammer unions in India for the oil & gas industry, including Fig 50, Fig 100, Fig 602, and Fig 1502.">
      <meta name="keywords" content="hammer union, oil and gas industry, hammer union manufacturer, hammer union india, fig 50, fig 100, fig 602, fig 1502">
      <?php }else if($url=="/ring-rolling.php"){ ?>
      <title>Ring Rolling Manufacturer, Exporters and Suppliers in India</title>
      <meta name="description" content="Forge Auto International is a leading manufacturer and exporter of high-quality, seamless forged rings in India. We are your trusted partner for precision ring rolling services.">
      <meta name="keywords" content="ring rolling manufacturer, forged rings, seamless rings, ring rolling india">
      <?php }else if($url=="/sustainability.php"){ ?>
      <title>Our Sustainability Commitment - Forge Auto International</title>
      <meta name="description" content="At Forge Auto International, we're dedicated to sustainable manufacturing. Our mission is to reduce environmental impact and give back to our community through responsible, eco-friendly production practices.">
      <meta name="keywords" content="sustainable manufacturing, green initiatives, environmental commitment, eco-friendly production, corporate social responsibility">
      <?php }else if($url=="/awards.php"){ ?>
      <title>Awards & Recognition - Forge Auto International</title>
      <meta name="description" content="Explore the awards and recognition earned by Forge Auto International for excellence in manufacturing, innovation, and quality within the forging, tractor, agricultural, railway & automotive industry.">
      <meta name="keywords" content="awards, recognition, quality awards, manufacturing awards, industry recognition">
      <?php }else if($url=="/get-enquiry.php"){ ?>
      <title>Contact Us for a Quote - Forge Auto International</title>
      <meta name="description" content="Have a question or a custom project in mind? Contact Forge Auto International today to get a quote or learn more about our forging services, automotive, hydraulic, tractor, railway & agricultural parts.">
      <meta name="keywords" content="contact us, get a quote, inquiry, custom forgings, forging services">
      <?php }else if($url=="/blog.php"){ ?>
      <title>Official Blog - Forge Auto International Limited -  Insights on Automotive, Forging, Tractor, Railway & Agriculture Parts</title>
      <meta name="description" content="Welcome to the official blog of Forge Auto International, a leading Indian manufacturer of auto, tractor, agriculture, railway, and forging parts. Get expert insights, industry news, and company updates on automotive components, precision forging, and manufacturing innovation.">
      <?php }else if($url=="/railway-parts-manufacturing.php"){ ?>
      <title>Staying on Track - How Forge Auto International Ltd. is Powering Progress in Railway Parts Manufacturing</title>
      <meta name="description" content="Discover how Forge Auto International Ltd. combines tradition with cutting-edge technology to manufacture durable and precisely designed railway parts.">
      <?php }else if($url=="/auto-parts-suppliers-in-india.php"){ ?>
      <title>Forge Auto - A Trusted Name Among Auto Parts Suppliers in India</title>
      <meta name="description" content="FAI Ltd.'s unwavering dedication to quality, innovation, and customer-centricity has solidified its reputation as a trusted name among auto parts suppliers in India.">
      <?php }else if($url=="/hydraulic-parts-used-in-the-automotive-industry.php"){ ?>
      <title>Forged for Power - Types of Hydraulic Parts Used in the Automotive Industry</title>
      <meta name="description" content="When strength, reliability, and performance matter, choose a trusted hydraulic parts manufacturer who understands the demands of modern mobility.">
      <?php }else if($url=="/forging-strength-for-indian-agriculture.php"){ ?>
      <title>Forging Strength for Indian Agriculture - Forge Auto International Ltd.</title>
      <meta name="description" content="FAI Ltd. isn’t just a name on a label-it’s a partner in progress. As one of the emerging tractors and agriculture implement parts manufacturers in India, the company is deeply rooted in the needs of Indian farmers.">
      <?php }else if($url=="/top-forging-manufacturers-in-india.php"){ ?>
      <title>Forging the Future - Top Forging Manufacturers in India</title>
      <meta name="description" content=" As the Forge Auto International Limited, continues to expand its capabilities and market reach, it solidifies its position among the top forging manufacturers in India, contributing significantly to the nation's industrial landscape.">
      <?php }else if($url=="/automotive-parts-manufacturer-in-india.php"){ ?>
      <title>How to Choose the Right Automotive Parts Manufacturer in India?</title>
      <meta name="description" content="FAI Ltd. exemplifies excellence across these parameters, making it a preferred partner for businesses seeking reliable and high-quality automotive components.">
      <?php }else if($url=="/key-components-that-keep-vehicles-moving.php"){ ?>
      <title>Inside the Driveshaft - Key Components That Keep Vehicles Moving</title>
      <meta name="description" content="Choose parts from trusted names in the business. And when you're looking for a flange yoke parts manufacturer that checks every box for quality, reliability, and technical excellence, FAI Ltd. is ready to deliver.">
      <?php }else if($url=="/propeller-shafts-in-automobiles.php"){ ?>
      <title>Propeller Shafts in Automobiles - Definition and Importance</title>
      <meta name="description" content="Choosing a quality manufacturer like FAI Ltd. means choosing performance without compromise. When your power train needs a trusted link, FAI delivers with precision, durability, and engineering you can count on.">
      
      <?php }else if($url=="/blog_details.php"){ ?>
	  <title><?php echo $blog['meta_title']; ?></title>
      <meta name="description" content="<?php echo $blog['meta_description']; ?>">
      
      <?php }else if($url=="/filename.php"){ ?>
      <!-- 08-12-2025 -->
<!-- 1 -->
 <?php }else if($url=="/forge-auto-agritechnica-2025-ag-tech-forging-excellence.php"){ ?>
      <title>Forge Auto at Agritechnica 2025 | Ag-Tech & Forging </title>
   <meta name="description" content="Discover how Forge Auto showcased advanced forged and machined ag-components at AGRITECHNICA 2025, strengthening global partnerships and driving smart agricultural innovation.">
<!-- 14-11 blogs -->
<!-- 1 -->
 <?php }else if($url=="/what-is-forging-complete-beginners-guide.php"){ ?>
      <title>What Is Forging? Process, Types & Benefits Explained</title>
   <meta name="description" content="Learn the basics of forging, its process, benefits, and applications across industries in this complete beginner’s guide from Forge Auto International.">
 <!-- 2 -->
  <?php }else if($url=="/top-applications-of-forged-components-in-the-automotive-industry.php"){ ?>
  <title>Automotive Forging Applications</title>
<meta name="description" content=" Discover how forged components power modern vehicles. Explore uses of crankshafts, axles, and gears made by Forge Auto International.">
 <!-- 3 -->
  <?php }else if($url=="/why-forging-is-preferred-over-casting-and-machining.php"){ ?>
<title>Forging vs Casting vs Machining</title> 

<meta name="description" content="Understand why forging outperforms casting and machining in strength, cost, and reliability. A detailed comparison by Forge Auto International.">

<!-- 4 -->
 <?php }else if($url=="/quality-control-in-forging-process.php"){ ?>
 <title>Forging Quality Control Process</title>
<meta name="description" content="Explore Forge Auto’s step-by-step quality control—from raw material testing to final inspection—ensuring unmatched precision and performance.">

<!-- 5 -->
 <?php }else if($url=="/sustainability-in-forging-how-we-minimize-waste-and-energy-use.php"){ ?>
<title>Sustainable Forging Practices in India</title>
<meta name="description" content="See how Forge Auto leads in green manufacturing with solar power, PNG furnaces, water recycling, and carbon offset through Miyawaki forests.">

!-- 1-- 10-02-2026 -->
 <?php }else if($url=="/evolution-of-forging-technology-from-hammer-to-hydraulic-presses.php"){ ?>
 <title>Evolution of Forging Technology – From Hammer to Smart Presses</title>
<meta name="description" content="Explore how forging evolved from ancient blacksmithing to modern hydraulic presses, automation, and digital simulation shaping today’s industrial manufacturing.">

<!-- 2-- 10-02-2026 -->
 <?php }else if($url=="/role-of-heat-treatment-in-strength-and-durability-of-forged-components.php"){ ?>
 <title>Heat Treatment in Forging – Strength, Durability & Performance</title>
<meta name="description" content="Understand how heat treatment enhances forged steel strength, toughness, and fatigue life through controlled processes and modern metallurgical systems.">


<!-- 3-- 10-02-2026 -->
 <?php }else if($url=="/forging-in-railways-powering-the-backbone-of-modern-transport.php"){ ?>
 <title>Forging in Railways – Components Powering Modern Transport</title>
<meta name="description" content="Discover why forged components are critical to railway safety, vibration resistance, and long-term performance in modern rail infrastructure.">


<!-- 4-- 10-02-2026 -->
 <?php }else if($url=="/how-industry-4-0-is-transforming-the-forging-sector.php"){ ?>
<title>Industry 4.0 in Forging – Smart, Automated Manufacturing</title> 
<meta name="description" content="See how Industry 4.0 technologies like automation, data analytics, and digital quality systems are transforming forging into a smart manufacturing process.">





      <?php }else{?>
      <title>Forge Auto International</title>
      <link rel="canonical" href="https://www.aint.in<?php echo $_SERVER['REQUEST_URI'];?>">
      <?php }  ?>
      <!-- responsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- For IE -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="assets/css/aos.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/imp.css">
      <link rel="stylesheet" href="assets/css/custom-animate.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/owl.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/scrollbar.css">
      <link rel="stylesheet" href="assets/css/hiddenbar.css">
      <link rel="stylesheet" href="assets/css/icomoon.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/rtl.css">
      <link rel="stylesheet" href="assets/css/style.css?v=2.3">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon-40x40.png"/>
      <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
         />
		 <link href="assets/css/select2.min.css" rel="stylesheet" />
      <!-- Fixing Internet Explorer-->
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="assets/js/html5shiv.js"></script>
      <![endif]-->
      <!--<script type="text/javascript"
         src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=y5u0u59AQvEZnOmpia-KmZnVJjvl8c_vOtsX562SDonPC_RnbC9eL7lJ7NMGzFDa6xDfRSeqhz4yNsRX4rU2h0GbcdzEwEVRptylFSHBsY_My84YmMKg2R9ZytT4NQi-fgoVNE4KgvP7mKaP8da13l0MAIgAW3w1BPpslP0QNbTpniPA316QwX7DPChnBbOdyxvpu96brQ_q36JKQz4Qyg"
         charset="UTF-8"></script> -->
      <?php if($url == '/' || $url == '/index.php') { ?>
      <script type="application/ld+json">
         {
         
           "@context" : "https://schema.org",
         
           "@type" : "WebSite",
         
           "name" : "Forge Auto International Limited",
         
           "url" : "https://www.failtd.com"
         
         }
         
            
      </script>
      <?php } ?>
      <style>
         .error{color:red; }
         #google_translate_element {
         margin-top: 10px;
         right: 6%;
         }
         /*#blog-content p,li{    text-align: justify; }*/
         #blog-content table td,th{    padding:5px; }
         #blog-content table {    margin:15px; }
         .ml-50{ margin-left:50px; }
         .blog-row p{ text-align:left;justify; }
         .blog-row a{ color:#5a0909 ; }
      </style>
   </head>
   <script type="text/javascript">
      function googleTranslateElementInit() {
      	new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'de,es,fr,it,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
      }
   </script>
   <script type="text/javascript"
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   <body>
      <div class="boxed_wrapper ltr">
      <!-- Preloader -->
      <!--     <div class="loader-wrap">
         <div class="preloader">
             <div class="preloader-close">Preloader Close</div>
         </div>
         <div class="layer layer-one"><span class="overlay"></span></div>
         <div class="layer layer-two"><span class="overlay"></span></div>
         <div class="layer layer-three"><span class="overlay"></span></div>
         </div> -->
      <!-- page-direction -->
      <!--    <div class="page_direction">
         <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
         <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
         </div> -->
      <!-- page-direction end -->
      <!-- switcher menu -->
      <!--   <div class="switcher">
         <div class="switch_btn">
             <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
         </div>
         <div class="switch_menu">
         
             <div class="switcher_container">
                 <ul id="styleOptions" title="switch styling">
                     <li>
                         <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                     </li>
                     <li>
                         <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                     </li>
                 </ul>
             </div>
         </div>
         </div> -->
      <!-- end switcher menu -->
      <!-- Main header-->
      <header class="main-header header-style-four">
         <!--     <div class="header-top-style4">
            <div class="container-fluid">
                <div class="outer-box clearfix">
            
                    <div class="header-top-style4_left pull-left">
                        <div class="header-contact-info3">
                            <ul>
                                <li><span class="flaticon-incoming-call"></span><a href="tel:123456789">+1 (934) 256
                                        7850</a></li>
                                <li><span class="flaticon-envelope-1"></span><a
                                        href="mailto:logistic@email.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
            
                    <div class="header-top-style4_right pull-right">
                        <div class="header-social-link-1 header-social-link-4">
                            <div class="social-link">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            </div> -->
         <!--End Header Top-->
         <!--Start Header-->
         <div class="header-style4">
            <div class="container-fluid">
               <div class="outer-box clearfix">
                  <!--<div id="google_translate_element" class="text-right mg-top20"></div>-->
                  <div class="header-style4_left pull-left">
                     <div class="logo">
                        <a href="https://www.failtd.com/"><img src="assets/images/resources/logo-1.png" alt="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India"
                           title="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India"></a>
                     </div>
                  </div>
                  <div class="header-style4_right pull-right">
                     <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                           <div class="inner">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style4 navbar-expand-md navbar-light">
                           <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                              <ul class="navigation clearfix">
                                 <!-- <li class="dropdown current">
                                    <a class="home" href="#">
                                        <span class="home_text">Home</span>
                                        <span class="flaticon-home home_icon"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index-4.html">Home Factory</a></li>
                                        <li><a href="index-2.html">Home Industry</a></li>
                                        <li><a href="index-3.html">Home Construction</a></li>
                                        <li><a href="index-4.html">Home Renewable Energy</a></li>
                                        <li><a href="index-5.html">Home OilGas</a></li>
                                        <li><a href="index-onepage.html">Home OnePage</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-4.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                                <li><a href="index-4.html">Header Style Four</a></li>
                                                <li><a href="index-5.html">Header Style Five</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </li> -->
                                    <li><a href="mach-auto.php">Forge Mach</a></li>
                                 <li class="dropdown">
                                    <a href="javascript:;">About us</a>
                                    <ul>
                                       <li>
                                          <a href="about.php">Overview</a>
                                       </li>
                                       <!-- <li>
                                          <a href="directors-message.php">Directors Message</a>
                                          </li> -->
                                       <li>
                                          <a href="milestone.php">Milestone</a>
                                       </li>
                                       <li>
                                          <a href="mission-vision-and-future-plans.php">Mission, Vision &
                                          Future
                                          Plans</a>
                                       </li>
                                       <li>
                                          <a href="management.php">Management</a>
                                       </li>
                                       <li>
                                          <a href="quality-policy.php">Quality Policy</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <!-- <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services-v1.html">Services Style One</a></li>
                                        <li><a href="services-v2.html">Services Style Two</a></li>
                                        <li><a href="services-v3.html">Services Style Three</a></li>
                                        <li><a href="services-detail-v1.html">Oil & Gas Engineering</a></li>
                                        <li><a href="services-detail-v2.html">Power & Energy</a></li>
                                        <li><a href="services-detail-v3.html">Industrial Exploration</a>
                                        </li>
                                        <li><a href="services-detail-v4.html">Automation Industry</a></li>
                                        <li><a href="services-detail-v5.html">Manufacturing Plants</a></li>
                                        <li><a href="services-detail-v6.html">Chemical Research</a></li>
                                    </ul>
                                    </li> -->
                                 <!-- <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Error page</a></li>
                                    </ul>
                                    </li> -->
                                 <!-- <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog.html">News Grid View</a></li>
                                        <li><a href="blog-v2.html">News List View</a></li>
                                        <li><a href="blog-single.html">News Details</a></li>
                                    </ul>
                                    </li> -->
                                 <!-- <li><a href="infrastructure.php">Infrastructure</a></li> -->
                                 <li class="dropdown">
                                    <a href="infrastructure.php">Infrastructure</a>
                                    <ul>
                                       <li>
                                          <a href="design-engineering.php">Design & Engineering Department</a>
                                       </li>
                                       <li>
                                          <a href="forge-shop.php">Forge Shop</a>
                                       </li>
                                       <li>
                                          <a href="press-shop.php">Press Shop</a>
                                       </li>
                                       <li>
                                          <a href="ring-rollings.php">Ring Rolling</a>
                                       </li>
                                       <li>
                                          <a href="heat-treatment.php">Heat Treatment</a>
                                       </li>
                                       <li>
                                          <a href="machine-shop.php">Machine Shop</a>
                                       </li>
                                       <li>
                                          <a href="quality-checking.php">Quality Checking Instruments</a>
                                       </li>
                                       <li>
                                          <a href="capabilities.php">Capabilities</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="dropdown">
                                    <a href="javascript:;">Products</a>
                                    <ul>
                                       <li>
                                          <a href="auto-parts.php">Auto Parts</a>
                                       </li>
                                       <li>
                                          <a href="tractor-parts.php">Tractor Parts</a>
                                       </li>
                                       <li>
                                          <a href="striking-tools.php">Striking Tools</a>
                                       </li>
                                       <li>
                                          <a href="hydraulic-parts.php">Hydraulic Parts</a>
                                       </li>
                                       <li>
                                          <a href="agriculture-parts.php">Agriculture Parts</a>
                                       </li>
                                       <li>
                                          <a href="railway-parts.php">Railway Parts</a>
                                       </li>
                                       <li>
                                          <a href="chain-links.php">Chain Links</a>
                                       </li>
                                       <li>
                                          <a href="wheel-assembly.php">Wheel Assembly</a>
                                       </li>
                                       <li>
                                          <a href="tie-rods.php">Tie Rods</a>
                                       </li>
                                       <li>
                                          <a href=" oil-gas-industry.php">Oil & Gas Industry</a>
                                       </li>
                                       <li>
                                          <a href=" ring-rolling.php">Ring Rolling</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <!-- <li><a href="events.php">Events</a></li> -->
                                 <!-- <li><a href="sustainability.php">Sustainability</a></li> -->
                                 <!-- <li><a href="exhibitions.php"></a></li>
                                    <li><a href="awards.php"></a></li> -->
                                 <li class="dropdown">
                                    <a href="javascript:;">Investor Relation</a>
                                    <ul class="dropdown">
                                       <li class="dropdown">
                                          <a href="javascript:;">Corporate Governance</a>
                                          <ul>
                                             <li><a href="bod.php">BOD and Committee</a></li>
                                             <li><a href="directorProfile.php">Director Profile</a></li>
                                             <li><a href="javascript:;">Corporate Profile</a></li>
                                             <li><a href="corporatePolicies.php">Corporate Policies</a>
                                             </li>
                                             <li><a href="prospectus.php">Prospectus</a></li>
                                          </ul>
                                       </li>
                                       <li class="dropdown">
                                          <a href="">Financials and Reports</a>
                                          <ul>
                                             <li><a href="financialResults.php">Financial Results</a>
                                             </li>
                                             <li><a href="">Annual Reports</a></li>
                                             <li><a href="">Annual Returns</a></li>
                                             <li><a href="">Investors Presentation</a>
                                             </li>
                                             <li><a href="group-company.php">Group Company</a></li>
                                          </ul>
                                       </li>
                                       <li><a href="javascript:;">Shareholding Pattern</a>
                                       </li>
                                       <li class="dropdown">
                                          <a href="javascript:;">Stock Exchange</a>
                                          <ul>
                                             <li><a href="javascript:;">Other Disclosures /
                                                Announcements</a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li><a href="javascript:;">Board Meeting</a></li>
                                       <li class="dropdown">
                                          <a href="javascript:;">General Meeting</a>
                                          <ul>
                                             <li><a href="javascript:;">Annual General Meeting</a>
                                             </li>
                                             <li><a href="javascript:;">Extra-ordinary General
                                                Meeting</a>
                                             </li>
                                             <li><a href="assets/images/corporatePolicy/postal-ballot-notice.pdf" target="_blank">Postal Ballot</a></li>
                                          </ul>
                                       </li>
                                       <li><a href="javascript:;">Archives</a>
                                       </li>
                                       <li><a href="javascript:;">Help Desk</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a href="sustainability.php">Sustainability</a></li>
                                 <li class="dropdown">
                                    <a>Media</a>
                                    <ul>
                                       <li>
                                          <a href="exhibitions.php">Exhibitions</a>
                                       </li>
                                       <li>
                                          <a href="awards.php">Awards</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <!-- <li><a href="clients.php">Clients</a></li> -->
                                 <li><a href="contact.php">Contact</a></li>
                                 <!-- <li><a href="#">Enquiry</a></li> -->
                              </ul>
                           </div>
                        </nav>
                        <!-- Main Menu End-->
                     </div>
                     <!-- <div class="outer-search-box-style1 outer-search-box-style4">
                        <div class="seach-toggle"><span class="flaticon-magnifiying-glass"></span></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="index-4.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here"
                                            required="">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        </div> -->
                     <!-- <div class="header-style4_right__btn">
                        <a class="btn-one" href="#"><span class="txt"><i class="left flaticon-login"></i>Get a
                                quote</span></a>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
         <!--End header-->
         <!--Sticky Header-->
         <div class="sticky-header">
            <div class="container-fluid">
               <div class="clearfix">
                  <!--Logo-->
                  <div class="logo float-left">
                     <a href="index.php" class="img-responsive"><img src="assets/images/resources/logo-1.png"
                        alt="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India"
                           title="Tractor, Auto, Agriculture, Combine & Railway Parts Manufacturer - Forge Auto International Limited - Forging Parts Manufacturer in India"></a>
                  </div>
                  <!--Right Col-->
                  <div class="right-col float-right">
                     <!-- Main Menu -->
                     <nav class="main-menu style4 clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!--End Sticky Header-->
         <!-- Mobile Menu  -->
         <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
               <div class="nav-logo"><a href="https://www.failtd.com/"><img src="assets/images/resources/logo.png" alt="img" title="img"></a></div>
               <div class="menu-outer">
                  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
               </div>
               <!--Social Links-->
               <!--  <div class="social-links">
                  <ul class="clearfix">
                      <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                      <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                  </ul>
                  </div> -->
            </nav>
         </div>
         <!-- End Mobile Menu -->
      </header>