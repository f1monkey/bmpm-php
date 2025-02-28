<?php

  /*
   *
   * Copyright Alexander Beider and Stephen P. Morse, 2008
   *
   * This file is part of the Beider-Morse Phonetic Matching (BMPM) System. 

   * BMPM is free software: you can redistribute it and/or modify
   * it under the terms of the GNU General Public License as published by
   * the Free Software Foundation, either version 3 of the License, or
   * (at your option) any later version.
   *
   * BMPM is distributed in the hope that it will be useful,
   * but WITHOUT ANY WARRANTY; without even the implied warranty of
   * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   * GNU General Public License for more details.
   *
   * You should have received a copy of the GNU General Public License
   * along with BMPM.  If not, see <http://www.gnu.org/licenses/>.
   *
   */

// GENERIC
include_once "exactapproxcommon.php";

$approxCommon = array(

// DUTCH 
    array ("vanden", "^", "", "(vanden|)"), 
    array ("vander", "^", "", "(vander|)"), 
    array ("van", "^", "[bp]", "(vam|[$dutch])"), 
    array ("van", "^", "", "(van|[$dutch])"), 


// REGRESSIVE ASSIMILATION OF CONSONANTS
    array("n","","[bp]","m"), 
        
// PECULIARITY OF "h" 
    array("h","","",""), 
    array("H","","","(x|)"), 

// "e" and "i" ARE TO BE OMITTED BEFORE (SYLLABIC) n & l: Halperin=Halpern; Frankel = Frankl, Finkelstein = Finklstein
// but Andersen & Anderson should match
    array ("sen", "[rmnl]", "$", "(zn|zon)"),
    array ("sen", "", "$", "(sn|son)"),
    array ("sEn", "[rmnl]", "$", "(zn|zon)"),
    array ("sEn", "", "$", "(sn|son)"),
            
    array ("e", "[BbdfgklmnprsStvzZ]", "[ln]$", ""),
    array ("i", "[BbdfgklmnprsStvzZ]", "[ln]$", ""),
    array ("E", "[BbdfgklmnprsStvzZ]", "[ln]$", ""),
    array ("I", "[BbdfgklmnprsStvzZ]", "[ln]$", ""),
    array ("Q", "[BbdfgklmnprsStvzZ]", "[ln]$", ""),
    array ("Y", "[BbdfgklmnprsStvzZ]", "[ln]$", ""),

    array ("e", "[bdfgklmnprsStvzZ]", "[ln][bdfgklmnprsStvzZ]", "(e|)"),
    array ("i", "[bdfgklmnprsStvzZ]", "[ln][bdfgklmnprsStvzZ]", "(i|)"),
    array ("E", "[bdfgklmnprsStvzZ]", "[ln][bdfgklmnprsStvzZ]", "(E|)"),
    array ("I", "[bdfgklmnprsStvzZ]", "[ln][bdfgklmnprsStvzZ]", "(I|)"),
    array ("Q", "[bdfgklmnprsStvzZ]", "[ln][bdfgklmnprsStvzZ]", "(Q|)"),
    array ("Y", "[bdfgklmnprsStvzZ]", "[ln][bdfgklmnprsStvzZ]", "(Y|)"),
    //array ("e", "[BbdfgklmnprsStvzZ]", "[ln][BbdfgklmnprsStvzZ]", ""),
    //array ("i", "[BbdfgklmnprsStvzZ]", "[ln][BbdfgklmnprsStvzZ]", ""),
    //array ("E", "[BbdfgklmnprsStvzZ]", "[ln][BbdfgklmnprsStvzZ]", ""),
    //array ("I", "[BbdfgklmnprsStvzZ]", "[ln][BbdfgklmnprsStvzZ]", ""),
    //array ("Q", "[BbdfgklmnprsStvzZ]", "[ln][BbdfgklmnprsStvzZ]", ""),
    //array ("Y", "[BbdfgklmnprsStvzZ]", "[ln][BbdfgklmnprsStvzZ]", ""),

    array("lEs","","","(lEs|lz)"),  // Applebaum < Appelbaum (English + blend English-something forms as Finklestein)
    array("lE","[bdfgkmnprStvzZ]","","(lE|l)"),  // Applebaum < Appelbaum (English + blend English-something forms as Finklestein)

// SIMPLIFICATION: (TRIPHTHONGS & DIPHTHONGS) -> ONE GENERIC DIPHTHONG "D"
    array("aue","","","D"),
    array("oue","","","D"),
    
    array("AvE","","","(D|AvE)"),
    array("Ave","","","(D|Ave)"),
    array("avE","","","(D|avE)"),
    array("ave","","","(D|ave)"),
    
    array("OvE","","","(D|OvE)"),
    array("Ove","","","(D|Ove)"),
    array("ovE","","","(D|ovE)"),
    array("ove","","","(D|ove)"),
    
    array("ea","","","(D|ea)"),
    array("EA","","","(D|EA)"),
    array("Ea","","","(D|Ea)"),
    array("eA","","","(D|eA)"),
             
    array("aji","","","D"),
    array("ajI","","","D"),
    array("aje","","","D"),
    array("ajE","","","D"),
    
    array("Aji","","","D"),
    array("AjI","","","D"),
    array("Aje","","","D"),
    array("AjE","","","D"),
    
    array("oji","","","D"),
    array("ojI","","","D"),
    array("oje","","","D"),
    array("ojE","","","D"),
    
    array("Oji","","","D"),
    array("OjI","","","D"),
    array("Oje","","","D"),
    array("OjE","","","D"),
    
    array("eji","","","D"),
    array("ejI","","","D"),
    array("eje","","","D"),
    array("ejE","","","D"),
    
    array("Eji","","","D"),
    array("EjI","","","D"),
    array("Eje","","","D"),
    array("EjE","","","D"),
    
    array("uji","","","D"),
    array("ujI","","","D"),
    array("uje","","","D"),
    array("ujE","","","D"),
    
    array("Uji","","","D"),
    array("UjI","","","D"),
    array("Uje","","","D"),
    array("UjE","","","D"),
        
    array("iji","","","D"),
    array("ijI","","","D"),
    array("ije","","","D"),
    array("ijE","","","D"),
    
    array("Iji","","","D"),
    array("IjI","","","D"),
    array("Ije","","","D"),
    array("IjE","","","D"),
                         
    array("aja","","","D"),
    array("ajA","","","D"),
    array("ajo","","","D"),
    array("ajO","","","D"),
    array("aju","","","D"),
    array("ajU","","","D"),
    
    array("Aja","","","D"),
    array("AjA","","","D"),
    array("Ajo","","","D"),
    array("AjO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
    
    array("oja","","","D"),
    array("ojA","","","D"),
    array("ojo","","","D"),
    array("ojO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
    
    array("Oja","","","D"),
    array("OjA","","","D"),
    array("Ojo","","","D"),
    array("OjO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
    
    array("eja","","","D"),
    array("ejA","","","D"),
    array("ejo","","","D"),
    array("ejO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
    
    array("Eja","","","D"),
    array("EjA","","","D"),
    array("Ejo","","","D"),
    array("EjO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
    
    array("uja","","","D"),
    array("ujA","","","D"),
    array("ujo","","","D"),
    array("ujO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
        
    array("Uja","","","D"),
    array("UjA","","","D"),
    array("Ujo","","","D"),
    array("UjO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
        
    array("ija","","","D"),
    array("ijA","","","D"),
    array("ijo","","","D"),
    array("ijO","","","D"),
    array("Aju","","","D"),
    array("AjU","","","D"),
    
    array("Ija","","","D"),
    array("IjA","","","D"),
    array("Ijo","","","D"),
    array("IjO","","","D"),                         
    array("Aju","","","D"),
    array("AjU","","","D"),
                         
    array("j","","","i"),                         
                         
// lander = lender = länder 
    array("lYndEr","","$","lYnder"), 
    array("lander","","$","lYnder"), 
    array("lAndEr","","$","lYnder"), 
    array("lAnder","","$","lYnder"), 
    array("landEr","","$","lYnder"), 
    array("lender","","$","lYnder"), 
    array("lEndEr","","$","lYnder"), 
    array("lendEr","","$","lYnder"), 
    array("lEnder","","$","lYnder"), 

// burg = berg
    array("burk","","$","(burk|berk)"), 
    array("bUrk","","$","(burk|berk)"), 
    array("burg","","$","(burk|berk)"), 
    array("bUrg","","$","(burk|berk)"), 
    array("Burk","","$","(burk|berk)"), 
    array("BUrk","","$","(burk|berk)"), 
    array("Burg","","$","(burk|berk)"), 
    array("BUrg","","$","(burk|berk)"), 
             
// CONSONANTS {z & Z; s & S} are approximately interchangeable
    array ("s", "", "[rmnl]", "z"),
    array ("S", "", "[rmnl]", "z"),
    array ("s", "[rmnl]", "", "z"),
    array ("S", "[rmnl]", "", "z"), 
    
    array ("dS", "", "$", "S"),
    array ("dZ", "", "$", "S"),
    array ("Z", "", "$", "S"),
    array ("S", "", "$", "(S|s)"),
    array ("z", "", "$", "(S|s)"),
    
    array ("S", "", "", "s"),
    array ("dZ", "", "", "z"),
    array ("Z", "", "", "z"),
    
    array("exactapproxcommon plus approxcommon")
  );

$approxCommon = array_merge($exactApproxCommon, $approxCommon);


