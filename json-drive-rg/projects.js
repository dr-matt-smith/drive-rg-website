[	{
		"id" : 0,
		"projectTitle" : "3D Campus Simulation",
		"projectSubTitle":"Fly Through Virtual ITB Campus",
		"yearStart" : "2003",
		"yearEnd" : "present",
		"researchers" : "Various",
		"fundingAgencey" : "ITB Postgraduate Fund",
		"supervisor1" : "Hugh McCabe",
		"supervisor2" : "Matt Smith",
		"supervisor3" : "Stephen Sheridan",
		"about" : [
					{
						"para1" :"There is an ongoing project within the group to create a detailed 3D simulation of the ITB campus. The overall goal is to create an interactive 3D application which allows the user to navigate around the campus. It is aimed at prospective and new students at ITB in order to give them an engaging and fun way of learning about the layout of ITB i.e. where is the library building, where is the Students Union and so on. The project commenced in 2003 when a final year student, Alan Pike, created a detailed 3DS Max model of the ITB campus. Alan subsequently worked at ITB for a summer period in order to further refine the model and add more detail.",
					
						"para2" :"The output from this stage of the project was a 3DS Model and a VRML application which allows the user to move around the 3D model. If you have a VRML browser such as Cortona installed you can view this application by clicking on the link on the right-hand side of the screen. Further work was then done by Stephen Sheridan and Hugh McCabe to integrate the model into a physics based driving simulation program. The result of this was a stand-alone application that allows the user to drive a car around the campus model. This system was displayed at the official Institute opening in April 2004, and was demonstrated to invited guests, including the Minister for Education at the time, Noel Dempsey.",
					
						"para3" :"TRecent work on this system has involved using the Unreal 2 game engine as a means of rendering, and interacting with, the model. At present a detailed interior model of one of our buildings, the A block, has been successfully ported to the Unreal environment by Graham Whelan. This provides a game-like simulation which we are exploring as a means of a base implementation for a system for fire safety training. This was demonstrated at the ITT2006 conference in Carlow, Ireland, in November 2006. A number of undergraduate students are currently working on extending this to a complete campus model in the Unreal engine."
					}

				],
		"pubs" : [
					{ 	"id" : 0,
						"type": "",
						"month" : "",
						"year" : "",
						"title" : "  ",
						"author1" : "",
						"author2" : "",
						"author3" : "",
						"conference": " ",
						"venue" : "",
						"published" : "",
						"url" : ""
					}]
	},

	{
		"id" : 2,
		"projectTitle" : "Sound Synthesis",
		"projectSubTitle":"physics1",
		"yearStart" : "2001",
		"yearEnd" : "2003",
		"researchers" : "Graham McCann",
		"fundingAgencey" : "Postgraduate R&D Skills Programme",
		"supervisor1" : "Hugh McCabe",
		"supervisor2" : "",
		"supervisor3" : "",
		"about" : [
					{
						"para1" :"Over the past few decades the games industry has made some startling advances in the various fields that constitute it, most notably in the areas of graphics and artificial intelligence (AI). With the ever increasing capabilities of modern computer hardware, particularly processors and graphical accelerators, it has become possible to do more complex calculations on the fly, hence the current booming popularity of physical realism in computer games. A number of companies have appeared in recent years developing real-time physical simulators that can be integrated with existing graphics engines to create a visually believable virtual world. However, in order to create a truly immersive experience you need to have both vision and sound. If the sounds you hear don’t match what you see, then the illusion of realism will be ruined, no matter how impressive the visual aspect may be. With the inclusion of physics engines in many modern games, the foundation is already there for the addition of sound synthesis. The physics engine already calculates a considerable amount of data for its own purposes, and would usually discard any superfluous information once it has achieved the movements required. Instead of disposing of the intermediate physical calculations we can use the data to assist in the synthesis of an accompanying effects soundtrack.",
					
						"para2" :"The current trend for computer games and virtual environments is to use pre-recorded sounds, known as samples, for any of the audio components of the system. This has the advantage of requiring minimal processor time to play back the samples, since they usually can be played back without the aid of advanced filters. This method has two main disadvantages:",
						
						"para3" :"The first is the inconvenience involved for the developers in having to gather all the necessary sounds together before the game is completed. For large and complex games this can be quite an arduous task.",
					
						"para4" :"The second comes from the repetitive nature of the sounds. Due to the sounds being static recordings on the disk or in memory, each time they are played they sound exactly the same as the last time, or the last hundred times.",
					
						"para5" :"Computer simulated collisions, from an audio perspective at least, are a simple matter of what object collided with what, and they don’t usually take into account the specifics of the collision. In reality the exact points of impact on the colliding objects are very important in determining the resultant positions after the collision. The same factors come into play when determining what sounds can be heard. Take for example, two cubes knocking together. If they were to collide face to face (i.e. flat surfaces together) you would get a particular sound. On the other hand, if one of the blocks was tilted at an angle so that one of its corners hit one of the faces of the other block, you would get a moderately different sound. The difference in sound isn’t a huge amount, but enough that one would notice it. This is where sound synthesis appears to be advantageous. If the sounds were being created on the fly, then factors such as point of impact and force of impact can be used to control the nature of the sounds being produced.",
					
						"para6" :"This project uses modal synthesis to generate the sounds for the environment, which represents objects in terms of their frequency modes of vibration, allowing us to use the information supplied by a physics engine (contact forces and so on) to stimulate these modes and produce appropriate contact sounds. The first simulation pictured below right shows a model of a musical instrument similar to a vibraphone. At the users discretion a number of balls are added to the simulation at random locations above the instrument and allowed to fall under gravity. Upon contact with the keys of the instrument and with each other the synthesis engine will calculate the corresponding sounds based on the physical data received."
					}

				],

		"pubs" :[ 
					{	"id" : 0, 
						"type" : "M.Sc. Thesis",
						"month" : "February",
						"year" : "2004",
						"title" : "Real-Time Physically Based Audio Generation, M.Sc. Thesis",
						"author1" : "McCann, G.",
						"author2" : "",
						"author3" : "",
						"conference" : "",
						"venue" : "",
						"published" : "",
						"url" : ""
					},

					{	"id" : 1, 
						"type" : "Journal Article",
						"month" : "December",
						"year" : "2002",
						"title" : "Extending Physical Simulation to the Audio Domain",
						"author1" : "McCann, G.",
						"author2" : "McCabe, H.",
						"author3" : "",
						"conference" : "",
						"venue" : "",
						"published" : "ITB Journal, Issue 5",
						"url" : ""
					},

					{	"id" : 2, 
						"type" : "2002",
						"month" : "November",
						"year" : "",
						"title" : "Physics-Based Sound Synthesis for Computer Games",
						"author1" : "McCann, G.",
						"author2" : " McCabe, H.",
						"author3" : "",
						"conference" : "",
						"venue" : "",
						"published" : "The Irish Scientist 2002 Yearbook",
						"url" : ""
					},

					{	"id" : 3, 
						"type" : "Conference",
						"month" : "March",
						"year" : "2002",
						"title" : "A World Without WAVs: Towards Physically Based Sound Synthesis for Computer Games",
						"author1" : "McCann, G.",
						"author2" : " McCabe, H.",
						"author3" : "",
						"conference" : "Media Lab Europe",
						"venue" : "",
						"published" : "in Proceedings of the Third Irish Workshop on Computer Graphics, ps. 71-75",
						"url" : ""
					}
				]
		
	},

	

	{
		"id" : 3,
		"projectTitle" : "Automatic Building Generation",
		"projectSubTitle":"physics1",
		"yearStart" : "2006",
		"yearEnd" : "2008",
		"researchers" : "Graham Whelan",
		"fundingAgencey" : "Postgraduate R&D Skills Programme",
		"supervisor1" : "Hugh McCabe",
		"supervisor2" : "",
		"supervisor3" : "",
		"about" : [
					{	"para1" :"The goal of this project was to design and implement a software system that can automatically generate 3D models of buildings that are suitable for use in an interactive real time graphics application such as a game or a virtual reality simulation. The intention was to do this using procedural methods. These are computer graphics techniques that use algorithms to dynamically generate geometry. The motivation for this is to cut down on the content creation costs involved in developing these applications. Specific research questions were:",
					
						"para2" :"What types of procedural methods are most effective in this context?",
					
						"para3" :"Is it possible to carry this out rapidly enough within the application in order to accomplish real time generation?",
					
						"para4" :"Can we produce architecturally valid and visually convincing results?",

						"para5" :"Can the procedural generation system generate buildings at different levels of detail in order to facilitate real time rendering?",

						"para6" :"Our postgraduate student Graham Whelan worked on this project from 2006-2008 and produced an interactive building editor based on the principles outlined above."
					}

				],
		"pubs" :[ 
					{	"id" : 0, 
						"type" : "Conference Paper",
						"month" : "September",
						"year" : "2008",
						"title" : "Roll Your Own City, Artwork/Demo",
						"author1" : "Whelan, G.",
						"author2" : "McCabe, H.",
						"author3" : "Kelly, G.",
						"conference" : "DIMEA 2008: 3rd ACM International Conference on Digital Interactive Media in Entertainment and Arts",
						"venue" : "Athens, Greece",
						"published" : "",
						"url" : ""
					}
				]
	},
	{
		"id" : 0,
		"projectTitle" : "SEEFAR",
		"projectSubTitle":"Semiotic Evaluation Framework for Augmented Reality",
		"yearStart" : "2018",
		"yearEnd" : "2020",
		"researchers" : "Nina Lyons",
		"fundingAgencey" : "ITB Postgraduate Fund",
		"supervisor1" : "Matt Smith",
		"supervisor2" : "Hugh McCabe",
		"supervisor3" : "",
		"about" : [
					{
						"para1" :"",
					
						"para2" :"",
					
						"para3" :""
					}

				],
		"pubs" : [
					{ 	"id" : 0,
						"type": "Conference Paper",
						"month" : "06",
						"year" : "2018",
						"title" : "Seeing: The potential for Augmented Reality in the teaching and appreciate of art",
						"author1" : "Lyons, N. &",
						"author2" : "Smith, M.",
						"author3" : "",
						"conference": "DCAC-2018 the International Conference on Digital Culture & AudioVisual Challenges",
						"venue" : "Ionian University, Corfu",
						"published" : "In proceedings of ",
						"url" : ""
					},
					{ 	"id" : 1,
						"type": "Conference Paper",
						"month" : "08",
						"year" : "2018",
						"title" : "Sensory Seduction & Narrative Pull – The Promise of AR",
						"author1" : "Lyons,N.",
						"author2" : "Smith, M.",
						"author3" : "McCabe, H.",
						"conference": "IEEE GEM",
						"venue" : "Galway, Ireland",
						"published" : "In Proceedings of ",
						"link": "View",
						"url" : "https://ieeexplore.ieee.org/document/8516543"
					},
					{	"id" : 2,
						"type": "Conference Paper",
						"month" : "09",
						"year" : "2019",
						"title" : "Augmented Reality - A Curatorial Tool",
						"author1" : "Lyons, N. &",
						"author2" : "Smith, M.",
						"author3" : "",
						"conference": "VARE 2019 - the 5th International Workshop on Virtual and Augmented Reality in Education",
						"venue" : "Lisbon, Portugal",
						"published" : "In proceedings of",
						"abstract" : "", 
						"url" : ""
						
					},
					{ 	"id" : 3,
						"type": "Conference Paper",
						"month" : "11",
						"year" : "2018",
						"title" : "AR The Missing Link in Elearning",
						"author1" : "Lyons, N.",
						"author2" : "Smith, M.",
						"author3" : "",
						"conference": "UDHEIT",
						"venue" : "Dublin, Ireland",
						"published" : "In the proceedings",
						"url" : ""
					}]
	}

	]
















































