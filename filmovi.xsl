<xsl:stylesheet version = "1.0" 
   xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
   <xsl:template match = "/"> 
      <html> 
        <head>
            <link rel="stylesheet" href="style.css"/>
        </head>
         <body> 
         <div class="frame-container">
            <h2>Preporuke filmova</h2> 
            <table> 
               <tr> 
                  <th>Naslov</th> 
                  <th>Zanr</th> 
                  <th>Godina izlaska</th> 
               </tr> 
					
               <xsl:for-each select = "filmovi/film"> 
				
                  <tr> 
                     <td><xsl:value-of select = "naslov"/></td> 
                     <td><xsl:value-of select = "zanr"/></td> 
                     <td><xsl:value-of select = "godina_izlaska"/></td>  
                  </tr> 
					
               </xsl:for-each> 
            </table> 
        </div>
         </body> 
      </html> 
   </xsl:template>  
</xsl:stylesheet>