USE [WEBSHOP]
GO

DELETE PRODUCT_GERELATEERD_PRODUCT
DELETE PRODUCT
DELETE GEBRUIKER
DELETE PRODUCT
DELETE CATEGORIE

INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'Gitaar')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'Basgitaar')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'Drumstel')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'Keyboard')
INSERT [dbo].[CATEGORIE] ([CATEGORIENAAM]) VALUES (N'Studio')

SET IDENTITY_INSERT PRODUCT ON

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (1, N'Gretsch G6136T White Falcon', N'<li>Gelamineerde Maple Body</li>
<li>Gouden binding</li>
<li>Gelamineerde Rock Maple hals</li>
<li>Ebony toetsen</li>
<li>22 Frets</li>
<li>2x Dual Filtertron Humbuckers</li>
<li>Toggle Switch</li>
<li>Bigsby Tremolo</li>
<li>24K gouden hardware</li>
<li>Kleur: Wit</li>
<li>Inclusief koffer</li>', N'Gitaar', CAST(3199.00 AS Numeric(8, 2)), NULL, N'images/gitaar/gretsch-G6136T-white.jpg', N'images/gitaar/gretsch-G6136T-white.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (2, N'Dean Guitars Angel of Deth', N'<li>Elektrische gitaar</li>
<li>Signature model</li>
<li>Set-hals constructie</li>
<li>Mahonie body</li>
<li>Mahonie hals met Mustaine D-vorm</li>
<li>Ebbenhout fretboard</li>
<li>24 fretten</li>
<li>Abalone Custom Mustaine Inlays</li>
<li>64.8cm scale</li>
<li>4.3cm nut</li>
<li>Zwarte hardware</li>
<li>Mini Grover Tuners</li>
<li>Tune-O-Matic brug thomann (snaar door brug)</li>
<li>Dave Mustaine Duncan Live Wire humbucker pickups</li>
<li>Incl. koffer</li>
<li>Kleur: Angel Of Deth Custom Graphic</li>
', N'Gitaar', CAST(1215.00 AS Numeric(8, 2)), 33, N'images/gitaar/Dean Guitars Angel of Deth.jpg', N'images/gitaar/Dean Guitars Angel of Deth.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (3, N'Gibson SG Standard 2014 FB', N'<li>Mahonie body</li>
<li>Mahonie hals</li>
<li>Palissander fretboard</li>
<li>Min-ETune systeem</li>
<li>22 fretten</li>
<li>62.8cm scale</li>
<li>2x 57 Classic humbucker met coil splitting</li>
<li>2x volume en 2x toon control</li>
<li>Chrome hardware</li>
<li>Kleur: fireburst</li>
<li>Incl. koffer</li>
', N'Gitaar', CAST(1199.00 AS Numeric(8, 2)), 3, N'images/gitaar/Gibson SG Standard 2014 FB.jpg', N'images/gitaar/Gibson SG Standard 2014 FB.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (4, N'Fender David Gilmour Relic', N'<li>David Gilmour Relic Signature Custom Artist Model</li>
<li>Comfort Contoured Erle Body</li>
<li>Esdoorn toets</li>
<li>21 Vintage fretten</li>
<li>Scale: 648 mm</li>
<li>Zadelbreedte: 42,5 mm</li>
<li>Vintage Hardware</li>
<li>Fender/Gotoh Vintage Style Mechanieken</li>
<li>1-Laags Black Acryl pick guard</li>
<li>5-Way Switch</li>
<li>Incl. Special Case Black Tolex</li>
<li>Finish: Relic Zwart over 3-Tone Sunburst met Nitro Lak</li>
', N'Gitaar', CAST(4299.00 AS Numeric(8, 2)), 993, N'images/gitaar/Fender David Gilmour Relic.jpg', N'images/gitaar/Fender David Gilmour Relic.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (5, N'Fender Bigsby Tele Blue Paisley MBDG', N'
<li>Masterbuild door Dennis Galuzka</li>
<li>Geselecteerde elzenhouten body</li>
<li>Maple hals</li>
<li>Ovalen C-vorm hals</li>
<li>21 Medium Jumbo Frets</li>
<li>Seymour Duncan Seth Lover hals humbucker</li>
<li>51 Nocaster brug element</li>
<li>4-weg schakelaar (serie/paralel)</li>
<li>Bigsby B-5 brug</li>
<li>Kleur: Blue Paisley</li>
<li>Inclusief koffer, kabel en certificaat</li>', N'Gitaar', CAST(4499.00 AS Numeric(8, 2)), 45, N'images/gitaar/Fender Bigsby Tele Blue MBDG.jpg', N'images/gitaar/Fender Bigsby Tele Blue MBDG.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (6, N'Schecter PT BK', N'<li>Elzenhouten body</li>
<li>Aangeschroefde esdoorn hals</li>
<li>Esdoorn fretboard</li>
<li>22 fretten</li>
<li>Scale: 648 mm</li>
<li>2x Schecter Super Rock II Humbucker</li>
<li>Flatmount strings-thru-body bridge</li>
<li>Kleur: Zwart Hoogglans</li>
', N'Gitaar', CAST(685.00 AS Numeric(8, 2)), 47, N'images/gitaar/Schecter PT BK.jpg', N'images/gitaar/Schecter PT BK.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (7, N'G&L Tribute Asat Classic BB', N'
<li>Swamp Ash body</li>
<li>Esdoorn hals, Tinted Glossy</li>
<li>Esdoorn fretboard</li>
<li>2 x G&L Magnetic Field Design Singlecoils</li>
<li>3-Way Switch</li>
<li>1 Volume control</li>
<li>1 Tone control</li>
<li>Chrome hardware</li>
<li>1-laags, zwarte pickguard</li>
<li>Kleur: Butterscotch blonde</li>', N'Gitaar', CAST(459.00 AS Numeric(8, 2)), 996, N'images/gitaar/G&L Tribute Asat Classic BB.jpg', N'images/gitaar/G&L Tribute Asat Classic BB.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (8, N'Vintage Icon V62MRAB', N'<li>Elektrische gitaar uit de Icon Series</li>
<li>T-stijl</li>
<li>Elzenhout body</li>
<li>Bolt on esdoorn hals</li>
<li>Palissanderfretboard</li>
<li>64.8cm scale</li>
<li>22 fretten</li>
<li>Wilkinson WTB brug</li>
<li>2x Wilkinson single coil: MWTN (nek) en MWTB (brug) single coil pickups</li>
<li>Wilkinson Deluxe WJ55S tuners</li>
<li>Kleur: distressed ash blonde</li>', N'Gitaar', CAST(349.00 AS Numeric(8, 2)), 5, N'images/gitaar/Vintage Icon V62MRAB.jpg', N'images/gitaar/Vintage Icon V62MRAB.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (9, N'Gretsch G5420T Electromatic OR', N'<li>16'' hollow body</li>
<li>Met cutaway</li>
<li>Bodydikte: 70 mm</li>
<li>Esdoorn hals</li>
<li>Palissanderhouten fretboard</li>
<li>Hump-block inlays</li>
<li>22 fretten</li>
<li>Topkambreedte: 43 mm</li>
<li>Scale: 622 mm</li>
<li>Pickups: 2x blacktop filtertron
<li>3-way switch</li>
<li>Palissanderhouten adjusto-matic bridge</li>
<li>Licensed thomann Bigsby B60 vibrato</li>
<li>Vintage style open back stemmechanieken</li>
<li>Kleur: oranje</li>
<li>Koffer inbegrepen</li>', N'Gitaar', CAST(579.00 AS Numeric(8, 2)), 33, N'images/gitaar/Gretsch G5420T Electromatic OR.jpg', N'images/gitaar/Gretsch G5420T Electromatic OR.jpg')

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (10, N'Rickenbacker Standard 4003 FG', '<li>Kleur: Fireglo</li>
<li>Constructietype: Solid Body</li>
<li>Nek Constructie: Neck Thru</li>
<li>Aantal Snaren: 4-snarig</li>
<li>Aantal Fretten: 20 </li>
<li>Mensuur: Mediumscale</li>
<li>Snaarlengte: 33,25&quot; (84,46 cm)</li>
<li>Body Materiaal: Esdoorn (Maple)</li>
<li>Nek: Esdoorn (Maple)</li>
<li>Vorm: Rickenbacker-Style</li>
<li>Toets: Palissander (Rosewood)</li>
<li>Toets Inlays: Triangle Inlays</li>
<li>Pickup Keuzeschakelaar: 3-way Toggle</li>
<li>Controls: 2 x Volume  2 x Tone</li>
<li>Hardware: Chroom</li>
<li>Inbegrepen: Koffer</li>
<li>Bijzonderheden: Mono &amp; Stereo nutzbar</li>
<li>Gemaakt in: Made in USA</li>', N'Basgitaar', CAST(2199.00 AS numeric(8, 2)), 2, N'images/basgitaar/rickenbacker-standard-4003-fg.jpg', N'images/basgitaar/rickenbacker-standard-4003-fg.jpg')

SET IDENTITY_INSERT PRODUCT ON

INSERT [dbo].[PRODUCT] ([PRODUCTNUMMER], [PRODUCTNAAM], [OMSCHRIJVING], [CATEGORIE], [PRIJS], [VOORRAAD], [AFBEELDING_GROOT], [AFBEELDING_KLEIN]) 
VALUES (11, N'Music Man StingRay MM130 R BK', '<li>Kleur: Zwart</li>
<li>Constructietype: Solid Body</li>
<li>Nek Constructie: Geschroefd (Bolt-On Neck)</li>
<li>Aantal Snaren: 4-snarig</li>
<li>Aantal Fretten: 21</li>
<li>Mensuur: Longscale</li>
<li>Snaarlengte: 34&quot; (86,36 cm)</li>
<li>Body Materiaal: Essenhout (Ash)</li>
<li>Nek: Esdoorn (Maple)</li>
<li>Vorm: Sting Ray</li>
<li>Toets: Palissander (Rosewood)</li>
<li>Toets Inlays: Dot Inlays</li>
<li>Pickup Soort: MM-style</li>
<li>Electronica: 2 band EQ</li>
<li>Controls: 1x Vol, 2x Tone</li>
<li>Hardware: Chroom</li>
<li>Inbegrepen: Koffer</li>
<li>Gemaakt in: Made in USA</li>', N'Basgitaar', CAST(1829.00 AS numeric(8, 2)), 4, N'images/basgitaar/music-man-stingray-mm130-r-bk.jpg', N'images/basgitaar/music-man-stingray-mm130-r-bk.jpg')


SET IDENTITY_INSERT PRODUCT OFF

INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 2)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 4)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (1, 6)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 8)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 5)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (2, 7)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 1)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 7)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (3, 9)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 5)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 6)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (4, 1)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 8)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 7)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (6, 1)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 6)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 7)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (5, 1)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 9)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 8)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (7, 6)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 9)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 2)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (8, 6)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 4)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 3)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (9, 6)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (10, 11)
INSERT [dbo].[PRODUCT_GERELATEERD_PRODUCT] ([PRODUCTNUMMER], [PRODUCTNUMMER_GERELATEERD_PRODUCT]) VALUES (11, 10)



INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'barabas', N'Professor', NULL, N'Barabas', N'Bollebozen', 12, N'9574EC', N'Amoras', N'barabase@vandersteen.be', N'm', N'teletijdmachine')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'franka', N'Frank', NULL, N'Francesca Victoria', N'Museumstraat', 1, N'4920DD', N'Groterdam', N'franka@striphelden.eu', N'v', N'Bars')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'pietjepuk', N'Pietje', NULL, N'Puk', N'Postlaan', 6, N'3453AA', N'Keteldorp ', N'pietjepuk@pttpost.nl', N'm', N'spitsoor')
INSERT [dbo].[GEBRUIKER] ([GEBRUIKERSNAAM], [VOORNAAM], [TUSSENVOEGSEL], [ACHTERNAAM], [STRAATNAAM], [HUISNUMMER], [POSTCODE], [WOONPLAATS], [EMAIL], [SEXE], [WACHTWOORD]) VALUES (N'wdviking', N'Wicky', N'de', N'Viking', N'Whalhalla', 87, N'4326BB', N'Flake', N'wicky@halmar.com', N'm', N'ylvi')

USE MASTER
GO
