<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
	<body>
		<h2> VTU Student Information</h2>
		<table border="1">
			<tr bgcolor="#99cd32">
				<th>name</th>
				<th>usn</th>
				<th>collegeName</th>
                <th>branch</th>
				<th>year</th>
				<th>email</th>
			</tr>
		<xsl:for-each select="vtu/student">
		
		<xsl:choose>
			<xsl:when test="name = 'Linyi'">
			<tr bgcolor="#ff00ff">
				<td><xsl:value-of select="name"/></td>
				<td><xsl:value-of select="usn"/></td>
				<td><xsl:value-of select="college"/></td>
				<td><xsl:value-of select="branch"/></td>
				<td><xsl:value-of select="year"/></td>
				<td><xsl:value-of select="email"/></td>
			</tr>
			</xsl:when>
			<xsl:otherwise>
			<tr>
				<td><xsl:value-of select="name"/></td>
				<td><xsl:value-of select="usn"/></td>
				<td><xsl:value-of select="college"/></td>
				<td><xsl:value-of select="branch"/></td>
				<td><xsl:value-of select="year"/></td>
				<td><xsl:value-of select="email"/></td>
			</tr>
			</xsl:otherwise>
		</xsl:choose>
		</xsl:for-each>
	</table>
	<h2> Selected Student is highlighted</h2>
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>