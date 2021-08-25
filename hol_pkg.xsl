<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
<head>
    <link rel="stylesheet" href="cstSheet.css" type="text/css" />
</head>
<body class="glass">

<div class= "container">
<div>
<img src="https://res.cloudinary.com/dcpipxb1h/image/upload/v1625393969/Screenshot_2021-07-04_154739-removebg-preview_odxzyn.png"/>
</div>
<h2 style="color:#000063; font-size: xx-large; text-align:center; padding:20px; margin:20px" class="card_2">Travida</h2>
</div>

<div>
<h2 style="color:#000063; font-size: xx-large; text-align:center; padding:20px; margin:20px">Domestic Travel Plans</h2>
</div>
<table id="loctable" style="text-align: center;" class = "continer">
<tr class = "card2">
<th>Sr. No.</th>
<th>Package Name</th>
<th>Places</th>
<th>Duration</th>
<th>Price</th>
</tr>
<xsl:for-each select="holiday/package_dom">
<tr>
<td><xsl:value-of select="srno"/></td>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="places"/></td>
<td><xsl:value-of select="duration"/></td>
<td><xsl:value-of select="price"/></td>
</tr>
</xsl:for-each>
</table>

<br/><br/>
<h2 style="color:#000063; font-size: xx-large; text-align:center;">International Travel Plans</h2>
<table id="loctable" style="text-align: center;">
<tr>
<th>Sr. No.</th>
<th>Package Name</th>
<th>Places</th>
<th>Duration</th>
<th>Price</th>
</tr>
<xsl:for-each select="holiday/package_int">
<tr>
<td><xsl:value-of select="srno"/></td>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="places"/></td>
<td><xsl:value-of select="duration"/></td>
<td><xsl:value-of select="price"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html> 
</xsl:template>
</xsl:stylesheet>