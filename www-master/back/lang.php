<?php

// ---------------------------------------------------------------------
// Enumeration des identifiants de chaines
// ---------------------------------------------------------------------
/*
 *	Ajoutez dans cette classe tous les identifiants de chaines et à côté de chaque ce que la chaine représente
 *		- soit, une ligne const SID_XXXX = "xxxx"; // xxxx du site
 *		- et une ligne StringIdentifier::SID_XXXX dans le tableau de la constante SIDS
 */
class StringIdentifier {
	// identifiants
	const SID_TITLE = "{TITLE}"; // titre du site
    const SID_TITLE_MENU ="{TITLE_MENU}"; // titre du menu
	const SID_HOME = "{HOME}"; // titre du site
	const SID_PRESTA ="{PRESTA}"; // titre du menu nos prestations
	const SID_ETUDE ="{ETUDE}"; // lien de pres. du déroulement d'une étude
	const SID_COMPETENCES ="{COMPETENCES}"; // lien vers la pres. de nos domaines de compétences
	const SID_ENGAGEMENTS ="{ENGAGEMENTS}"; // lien vers la pres. de nos engagemnets
	const SID_NOUS ="{NOUS}"; // titre du menu nous découvrir
	const SID_EQUIPE ="{EQUIPE}"; // lien vers la pres. de l'équipe
	const SID_PARTENAIRES ="{PARTENAIRES}"; // lien vers la pres. de nos partenaires
	const SID_EVENEMENTS ="{EVENEMENTS}"; // lien vers la pres. de nos évenements
	const SID_CONFIANCE ="{CONFIANCE}"; // lien vers la page ils nous ont fait confiance
	const SID_BLOG ="{BLOG}"; // lien vers la page ils nous ont fait confiance
	const SID_PLAQUETTE ="{PLAQUETTE}"; // lien vers la plaquette
	const SID_DEVIS ="{DEVIS}"; // lien vers le formulaire
	const SID_MOUVEMENT ="{MOUVEMENT}"; // lien vers la pres du mouvement
	const SID_LANG = "{LANGUAGE}";
    const SID_PLAN = "{PLAN}";

	/*HOME*/
	const SID_HOME_STAT_EXPERIENCE = "{HOME_STAT_EXPERIENCE}";
	const SID_HOME_STAT_ENG = "{HOME_STAT_ENG}";
	const SID_HOME_STAT_TOP = "{HOME_STAT_TOP}";
	const SID_HOME_STAT_DOMAINES = "{HOME_STAT_DOMAINES}";
	const SID_HOME_STAT_SATISFACTION = "{HOME_STAT_SATISFACTION}";
	const SID_HOME_PALMARES_1 = "{HOME_PALMARES_1}";
	const SID_HOME_PALMARES_2 = "{HOME_PALMARES_2}";
	const SID_HOME_PALMARES_3 = "{HOME_PALMARES_3}";
	const SID_HOME_SKILLS = "{HOME_SKILLS}";
	const SID_HOME_SKILLS_SUB = "{HOME_SKILLS_SUB}";
	const SID_HOME_SKILLS_P = "{HOME_SKILLS_P}";
	const SID_HOME_SKILLS_DET = "{HOME_SKILLS_DET}";
	const SID_HOME_TRUST = "{HOME_TRUST}";
	const SID_HOME_TEMOIGNAGE = "{HOME_TEMOIGNAGE}";
	const SID_HOME_TEMOIGNAGE_SUB = "{HOME_TEMOIGNAGE_SUB}";
	const SID_HOME_PALMARES_H1 = "{HOME_PALMARES_H1}";
	const SID_HOME_PALMARES_SUB = "{HOME_PALMARES_SUB}";



	const SID_ETUDE_H2_1 = "{ETUDE_H2_1}"; // premier titre de niveau 2 de la page  déroulement d'une étude
	const SID_ETUDE_H2_2 = "{ETUDE_H2_2}";
	const SID_ETUDE_H2_3 = "{ETUDE_H2_3}";
	const SID_ETUDE_H2_4 = "{ETUDE_H2_4}";
	const SID_ETUDE_H2_5 = "{ETUDE_H2_5}";
	const SID_ETUDE_H2_6 = "{ETUDE_H2_6}";
	const SID_ETUDE_H2_7 = "{ETUDE_H2_7}";
	const SID_ETUDE_H2_8 = "{ETUDE_H2_8}";

	const SID_ETUDE_H3_1 = "{ETUDE_H3_1}"; // premier titre de niveau 3 de la page  déroulement d'une étude
	const SID_ETUDE_H3_2 = "{ETUDE_H3_2}";
	const SID_ETUDE_H3_3 = "{ETUDE_H3_3}";
	const SID_ETUDE_H3_4 = "{ETUDE_H3_4}";
	const SID_ETUDE_H3_5 = "{ETUDE_H3_5}";
	const SID_ETUDE_H3_6 = "{ETUDE_H3_6}";
	const SID_ETUDE_H3_7 = "{ETUDE_H3_7}";
	const SID_ETUDE_H3_8 = "{ETUDE_H3_8}";

	const SID_ETUDE_STEP_1 = "{ETUDE_STEP_1}";
	const SID_ETUDE_STEP_2 = "{ETUDE_STEP_2}";
	const SID_ETUDE_STEP_3 = "{ETUDE_STEP_3}";

	const SID_ETUDE_BULLSHIT_1 = "{SID_ETUDE_BULLSHIT_1}";
	const SID_ETUDE_BULLSHIT_2 = "{SID_ETUDE_BULLSHIT_2}";
	const SID_ETUDE_BULLSHIT_3 = "{SID_ETUDE_BULLSHIT_3}";

	const SID_ETUDE_P_1 = "{ETUDE_P_1}"; // premier paragraphe de la page  déroulement d'une étude
	const SID_ETUDE_P_2 = "{ETUDE_P_2}";
	const SID_ETUDE_P_3 = "{ETUDE_P_3}";
	const SID_ETUDE_P_4 = "{ETUDE_P_4}";
	const SID_ETUDE_P_5 = "{ETUDE_P_5}";
	const SID_ETUDE_P_6 = "{ETUDE_P_6}";
	const SID_ETUDE_P_7 = "{ETUDE_P_7}";
	const SID_ETUDE_P_8 = "{ETUDE_P_8}";

	const SID_COMPETENCES_H2_IF = "{COMPETENCES_H2_IF}"; // titre pour la compétence informatique
	const SID_COMPETENCES_H2_GM = "{COMPETENCES_H2_GM}";
	const SID_COMPETENCES_H2_GEN = "{COMPETENCES_H2_GEN}";
	const SID_COMPETENCES_H2_TC = "{COMPETENCES_H2_TC}";
	const SID_COMPETENCES_H2_GCU = "{COMPETENCES_H2_GCU}";
	const SID_COMPETENCES_H2_SGM = "{COMPETENCES_H2_SGM}";
	const SID_COMPETENCES_H2_GE = "{COMPETENCES_H2_GE}";
	const SID_COMPETENCES_H2_GI = "{COMPETENCES_H2_GI}";
	const SID_COMPETENCES_H2_BS = "{COMPETENCES_H2_BS}";
	const SID_COMPETENCES_H2_TR = "{COMPETENCES_H2_TR}"; // titre pour la traduction
	const SID_COMPETENCES_H2_SC = "{COMPETENCES_H2_SC}"; // titre pour les sciences de l'entreprise


	const SID_COMPETENCES_P_IF = "{COMPETENCES_P_IF}"; // paragraphr pour la compétence informatique
	const SID_COMPETENCES_P_GM = "{COMPETENCES_P_GM}";
	const SID_COMPETENCES_P_GEN = "{COMPETENCES_P_GEN}";
	const SID_COMPETENCES_P_TC = "{COMPETENCES_P_TC}";
	const SID_COMPETENCES_P_GCU = "{COMPETENCES_P_GCU}";
	const SID_COMPETENCES_P_SGM = "{COMPETENCES_P_SGM}";
	const SID_COMPETENCES_P_GE = "{COMPETENCES_P_GE}";
	const SID_COMPETENCES_P_GI = "{COMPETENCES_P_GI}";
	const SID_COMPETENCES_P_BS = "{COMPETENCES_P_BS}";
	const SID_COMPETENCES_P_TR = "{COMPETENCES_P_TR}"; // paragraphe pour la traduction
	const SID_COMPETENCES_P_SC = "{COMPETENCES_P_SC}"; // paragraphe pour les SCiences de l'entreprise

	const SID_COMPETENCES_PLUS_IF = "{COMPETENCES_PLUS_IF}"; // paragraphr pour la compétence informatique
	const SID_COMPETENCES_PLUS_GM = "{COMPETENCES_PLUS_GM}";
	const SID_COMPETENCES_PLUS_GEN = "{COMPETENCES_PLUS_GEN}";
	const SID_COMPETENCES_PLUS_TC = "{COMPETENCES_PLUS_TC}";
	const SID_COMPETENCES_PLUS_GCU = "{COMPETENCES_PLUS_GCU}";
	const SID_COMPETENCES_PLUS_SGM = "{COMPETENCES_PLUS_SGM}";
	const SID_COMPETENCES_PLUS_GE = "{COMPETENCES_PLUS_GE}";
	const SID_COMPETENCES_PLUS_GI = "{COMPETENCES_PLUS_GI}";
	const SID_COMPETENCES_PLUS_BS = "{COMPETENCES_PLUS_BS}";
	const SID_COMPETENCES_PLUS_TR = "{COMPETENCES_PLUS_TR}"; // paragraphe pour la traduction
	const SID_COMPETENCES_PLUS_SC = "{COMPETENCES_PLUS_SC}"; // paragraphe pour les SCiences de l'entreprise

	const SID_COMPETENCES_P2_IF = "{COMPETENCES_P2_IF}"; // paragraphre des pts positifs pour la compétence informatique
	const SID_COMPETENCES_P2_GM = "{COMPETENCES_P2_GM}";
	const SID_COMPETENCES_P2_GEN = "{COMPETENCES_P2_GEN}";
	const SID_COMPETENCES_P2_TC = "{COMPETENCES_P2_TC}";
	const SID_COMPETENCES_P2_GCU = "{COMPETENCES_P2_GCU}";
	const SID_COMPETENCES_P2_SGM = "{COMPETENCES_P2_SGM}";
	const SID_COMPETENCES_P2_GE = "{COMPETENCES_P2_GE}";
	const SID_COMPETENCES_P2_GI = "{COMPETENCES_P2_GI}";
	const SID_COMPETENCES_P2_BS = "{COMPETENCES_P2_BS}";
	const SID_COMPETENCES_P2_TR = "{COMPETENCES_P2_TR}"; // paragraphe des pts positifs pour la traduction

	const SID_COMPETENCES_MORE = "{COMPETENCES_MORE}";

	const SID_MOUVEMENT_P = "{MOUVEMENT_P}"; //

	const SID_CONFIANCE_1 = "{CONFIANCE_1}"; // paragraphe de la première ciatation dans la page confiance
	const SID_CONFIANCE_2 = "{CONFIANCE_2}";
	const SID_CONFIANCE_3 = "{CONFIANCE_3}";
	const SID_CONFIANCE_4 = "{CONFIANCE_4}";
	const SID_CONFIANCE_QUOTE_1 = "{CONFIANCE_QUOTE_1}"; // paragraphe de la première ciatation dans la page confiance
	const SID_CONFIANCE_QUOTE_2 = "{CONFIANCE_QUOTE_2}";
	const SID_CONFIANCE_QUOTE_3 = "{CONFIANCE_QUOTE_3}";

	const SID_PARTENAIRES_1 = "{PARTENAIRES_1}"; // paragraphe de la première ciatation dans la page confiance
	const SID_PARTENAIRES_2 = "{PARTENAIRES_2}";
	const SID_PARTENAIRES_3 = "{PARTENAIRES_3}";
	const SID_PARTENAIRES_4 = "{PARTENAIRES_4}";

	const SID_VALEURS_H1 = "{VALEURS_H1}";
	const SID_VALEURS_1 = "{VALEURS_1}";
	const SID_VALEURS_2 = "{VALEURS_2}";
	const SID_VALEURS_3 = "{VALEURS_3}";
	const SID_VALEURS_4 = "{VALEURS_4}";
	const SID_VALEURS_5 = "{VALEURS_5}";
	const SID_ENGAGEMENT_H1 = "{ENGAGEMENT_H1}";
	const SID_ENGAGEMENT_P_1 = "{ENGAGEMENT_P_1}";
	const SID_ENGAGEMENT_P_2 = "{ENGAGEMENT_P_2}";

	const SID_ENGAGEMENT_H2_1 = "{ENGAGEMENT_H2_1}";
	const SID_ENGAGEMENT_H2_2 = "{ENGAGEMENT_H2_2}";
	const SID_ENGAGEMENT_P_3 = "{ENGAGEMENT_P_3}";
	const SID_ENGAGEMENT_P_4 = "{ENGAGEMENT_P_4}";
	const SID_ENGAGEMENT_P_5 = "{ENGAGEMENT_P_5}";
	const SID_ENGAGEMENT_P_6 = "{ENGAGEMENT_P_6}";
	const SID_ENGAGEMENT_P_7 = "{ENGAGEMENT_P_7}";
	const SID_ENGAGEMENT_P_8 = "{ENGAGEMENT_P_8}";

	const SID_PRESIDENT_H1 = "{PRESIDENT_H1}";
	const SID_PRESIDENT_P = "{PRESIDENT_P}";
	const SID_PRESIDENT_SIGN = "{PRESIDENT_SIGN}";
	const SID_BUREAU = "{BUREAU}";
	const SID_CA = "{CA}";
	const SID_EQUIPES = "{EQUIPES}";

	const SID_DSI = "{DSI}";
	const SID_QUALITE = "{QUALITE}";
	const SID_UA = "{UA}";
	const SID_GRC = "{GRC}";
	const SID_COM = "{COM}";
	const SID_TRESOR = "{TRESOR}";

	const SID_DESC_DSI = "{DESC_DSI}";
	const SID_DESC_QUALITE = "{DESC_QUALITE}";
	const SID_DESC_UA = "{DESC_UA}";
	const SID_DESC_GRC = "{DESC_GRC}";
	const SID_DESC_COM = "{DESC_COM}";
	const SID_DESC_TRESO = "{DESC_TRESO}";

	const SID_PRES = "{PRES}";
	const SID_VP = "{VP}";
	const SID_SG = "{SG}";
	const SID_TRESO = "{TRESO}";
	const SID_VTRESO = "{VTRESO}";
	const SID_RESP_DSI = "{RESP_DSI}";
	const SID_RESP_QUALITE = "{RESP_QUALITE}";
	const SID_RESP_UA_V = "{RESP_UA_V}";
	const SID_RESP_UA_RM = "{RESP_UA_RM}";
	const SID_RESP_GRC = "{RESP_GRC}";
	const SID_RESP_COM = "{RESP_COM}";

	const SID_CRP = "{CRP}";
	const SID_CRA = "{CRA}";
	const SID_CNE = "{CNE}";
	const SID_CNH = "{CNH}";
	const SID_JDP = "{JDP}";
	const SID_TEDX = "{TEDX}";

	const SID_CRP_SUB = "{CRP_SUB}";
	const SID_CRA_SUB = "{CRA_SUB}";
	const SID_CNE_SUB = "{CNE_SUB}";
	const SID_CNH_SUB = "{CNH_SUB}";
	const SID_JDP_SUB = "{JDP_SUB}";
	const SID_TEDX_SUB = "{TEDX_SUB}";

	const SID_CRP_P = "{CRP_P}";
	const SID_CRA_P = "{CRA_P}";
	const SID_CNE_P = "{CNE_P}";
	const SID_CNH_P = "{CNH_P}";
	const SID_JDP_P = "{JDP_P}";
	const SID_TEDX_P = "{TEDX_P}";

	const SID_DEVIS_LASTNAME 			= "{DEVIS_LASTNAME}";
	const SID_DEVIS_FIRSTNAME 			= "{DEVIS_FIRSTNAME}";
	const SID_DEVIS_FIRM 				= "{DEVIS_FIRM}";
	const SID_DEVIS_MAIL 				= "{DEVIS_MAIL}";
	const SID_DEVIS_PHONE 				= "{DEVIS_PHONE}";
	const SID_DEVIS_SUBJECT 			= "{DEVIS_SUBJECT}";
	const SID_DEVIS_MESSAGE 			= "{DEVIS_MESSAGE}";
	const SID_DEVIS_PLANNED_BUDGET 		= "{DEVIS_PLANNED_BUDGET}";
	const SID_DEVIS_PLANNED_DURATION 	= "{DEVIS_PLANNED_DURATION}";
	const SID_DEVIS_CAPTCHA_CODE 		= "{DEVIS_CAPTCHA_CODE}";
	const SID_DEVIS_RESET 				= "{DEVIS_RESET}";
	const SID_DEVIS_SUBMIT 				= "{DEVIS_SUBMIT}";
	const SID_DEVIS_HEADER 				= "{DEVIS_HEADER}";

	const SID_FOOTER_DESCRIPTION        = "{FOOTER_DESCRIPTION}";
	const SID_FOOTER_RESEAUX        	= "{FOOTER_RESEAUX}";
	const SID_FOOTER_CONTACT        	= "{FOOTER_CONTACT}";

	const SID_PROJECT_IDEA        	= "{PROJECT_IDEA}";

	const SID_TELECHARGER_PLAQUETTE        	= "{TELECHARGER_PLAQUETTE}";
	const SID_TELECHARGER_PORTFOLIO        	= "{TELECHARGER_PORTFOLIO}";

	// tableau des identifiants
	const SIDS = array(
		StringIdentifier::SID_TITLE,
        StringIdentifier::SID_TITLE_MENU,
		StringIdentifier::SID_HOME,
		StringIdentifier::SID_PRESTA,
		StringIdentifier::SID_ETUDE,
		StringIdentifier::SID_COMPETENCES,
		StringIdentifier::SID_ENGAGEMENTS,
		StringIdentifier::SID_NOUS,
		StringIdentifier::SID_EQUIPE,
		StringIdentifier::SID_PARTENAIRES,
		StringIdentifier::SID_EVENEMENTS,
		StringIdentifier::SID_CONFIANCE,
		StringIdentifier::SID_BLOG,
		StringIdentifier::SID_PLAQUETTE,
		StringIdentifier::SID_DEVIS,
		StringIdentifier::SID_MOUVEMENT,
		StringIdentifier::SID_LANG,
        StringIdentifier::SID_PLAN,

		/*HOME*/
		StringIdentifier::SID_HOME_STAT_EXPERIENCE,
		StringIdentifier::SID_HOME_STAT_ENG,
		StringIdentifier::SID_HOME_STAT_TOP,
		StringIdentifier::SID_HOME_STAT_DOMAINES,
		StringIdentifier::SID_HOME_STAT_SATISFACTION,
		StringIdentifier::SID_HOME_PALMARES_1,
		StringIdentifier::SID_HOME_PALMARES_2,
		StringIdentifier::SID_HOME_PALMARES_3,
		StringIdentifier::SID_HOME_SKILLS,
		StringIdentifier::SID_HOME_SKILLS_SUB,
		StringIdentifier::SID_HOME_SKILLS_P,
		StringIdentifier::SID_HOME_SKILLS_DET,
		StringIdentifier::SID_HOME_TRUST,
		StringIdentifier::SID_HOME_TEMOIGNAGE,
		StringIdentifier::SID_HOME_TEMOIGNAGE_SUB,
		StringIdentifier::SID_HOME_PALMARES_H1,
		StringIdentifier::SID_HOME_PALMARES_SUB,


		StringIdentifier::SID_ETUDE_H2_1,
		StringIdentifier::SID_ETUDE_H2_2,
		StringIdentifier::SID_ETUDE_H2_3,
		StringIdentifier::SID_ETUDE_H2_4,
		StringIdentifier::SID_ETUDE_H2_5,
		StringIdentifier::SID_ETUDE_H2_6,
		StringIdentifier::SID_ETUDE_H2_7,
		StringIdentifier::SID_ETUDE_H2_8,

		StringIdentifier::SID_ETUDE_H3_1,
		StringIdentifier::SID_ETUDE_H3_2,
		StringIdentifier::SID_ETUDE_H3_3,
		StringIdentifier::SID_ETUDE_H3_4,
		StringIdentifier::SID_ETUDE_H3_5,
		StringIdentifier::SID_ETUDE_H3_6,
		StringIdentifier::SID_ETUDE_H3_7,
		StringIdentifier::SID_ETUDE_H3_8,

		StringIdentifier::SID_ETUDE_STEP_1,
		StringIdentifier::SID_ETUDE_STEP_2,
		StringIdentifier::SID_ETUDE_STEP_3,

		StringIdentifier::SID_ETUDE_BULLSHIT_1,
		StringIdentifier::SID_ETUDE_BULLSHIT_2,
		StringIdentifier::SID_ETUDE_BULLSHIT_3,

		StringIdentifier::SID_ETUDE_P_1,
		StringIdentifier::SID_ETUDE_P_2,
		StringIdentifier::SID_ETUDE_P_3,
		StringIdentifier::SID_ETUDE_P_4,
		StringIdentifier::SID_ETUDE_P_5,
		StringIdentifier::SID_ETUDE_P_6,
		StringIdentifier::SID_ETUDE_P_7,
		StringIdentifier::SID_ETUDE_P_8,

		StringIdentifier::SID_COMPETENCES_H2_IF,
		StringIdentifier::SID_COMPETENCES_H2_GM,
		StringIdentifier::SID_COMPETENCES_H2_GEN,
		StringIdentifier::SID_COMPETENCES_H2_TC,
		StringIdentifier::SID_COMPETENCES_H2_GCU,
		StringIdentifier::SID_COMPETENCES_H2_SGM,
		StringIdentifier::SID_COMPETENCES_H2_GE,
		StringIdentifier::SID_COMPETENCES_H2_GI,
		StringIdentifier::SID_COMPETENCES_H2_BS,
		StringIdentifier::SID_COMPETENCES_H2_TR,
		StringIdentifier::SID_COMPETENCES_H2_SC,

		StringIdentifier::SID_COMPETENCES_PLUS_IF,
		StringIdentifier::SID_COMPETENCES_PLUS_GM,
		StringIdentifier::SID_COMPETENCES_PLUS_GEN,
		StringIdentifier::SID_COMPETENCES_PLUS_TC,
		StringIdentifier::SID_COMPETENCES_PLUS_GCU,
		StringIdentifier::SID_COMPETENCES_PLUS_SGM,
		StringIdentifier::SID_COMPETENCES_PLUS_GE,
		StringIdentifier::SID_COMPETENCES_PLUS_GI,
		StringIdentifier::SID_COMPETENCES_PLUS_BS,
		StringIdentifier::SID_COMPETENCES_PLUS_TR,
		StringIdentifier::SID_COMPETENCES_PLUS_SC,

		StringIdentifier::SID_MOUVEMENT_P,

		StringIdentifier::SID_COMPETENCES_P_IF,
		StringIdentifier::SID_COMPETENCES_P_GM,
		StringIdentifier::SID_COMPETENCES_P_GEN,
		StringIdentifier::SID_COMPETENCES_P_TC,
		StringIdentifier::SID_COMPETENCES_P_GCU,
		StringIdentifier::SID_COMPETENCES_P_SGM,
		StringIdentifier::SID_COMPETENCES_P_GE,
		StringIdentifier::SID_COMPETENCES_P_GI,
		StringIdentifier::SID_COMPETENCES_P_BS,
		StringIdentifier::SID_COMPETENCES_P_TR,
		StringIdentifier::SID_COMPETENCES_P_SC,

		StringIdentifier::SID_COMPETENCES_P2_IF,
		StringIdentifier::SID_COMPETENCES_P2_GM,
		StringIdentifier::SID_COMPETENCES_P2_GEN,
		StringIdentifier::SID_COMPETENCES_P2_TC,
		StringIdentifier::SID_COMPETENCES_P2_GCU,
		StringIdentifier::SID_COMPETENCES_P2_SGM,
		StringIdentifier::SID_COMPETENCES_P2_GE,
		StringIdentifier::SID_COMPETENCES_P2_GI,
		StringIdentifier::SID_COMPETENCES_P2_BS,
		StringIdentifier::SID_COMPETENCES_P2_TR,
		StringIdentifier::SID_COMPETENCES_MORE,

		StringIdentifier::SID_CONFIANCE_1,
		StringIdentifier::SID_CONFIANCE_2,
		StringIdentifier::SID_CONFIANCE_3,
		StringIdentifier::SID_CONFIANCE_4,
		StringIdentifier::SID_CONFIANCE_QUOTE_1,
		StringIdentifier::SID_CONFIANCE_QUOTE_2,
		StringIdentifier::SID_CONFIANCE_QUOTE_3,

		StringIdentifier::SID_VALEURS_H1,
		StringIdentifier::SID_VALEURS_1,
		StringIdentifier::SID_VALEURS_2,
		StringIdentifier::SID_VALEURS_3,
		StringIdentifier::SID_VALEURS_4,
		StringIdentifier::SID_VALEURS_5,
		StringIdentifier::SID_ENGAGEMENT_H1,
		StringIdentifier::SID_ENGAGEMENT_P_1,
		StringIdentifier::SID_ENGAGEMENT_P_2,
		StringIdentifier::SID_ENGAGEMENT_H2_1,
		StringIdentifier::SID_ENGAGEMENT_P_3,
		StringIdentifier::SID_ENGAGEMENT_P_4,
		StringIdentifier::SID_ENGAGEMENT_P_5,
		StringIdentifier::SID_ENGAGEMENT_H2_2,
		StringIdentifier::SID_ENGAGEMENT_P_6,
		StringIdentifier::SID_ENGAGEMENT_P_7,
		StringIdentifier::SID_ENGAGEMENT_P_8,

		StringIdentifier::SID_PARTENAIRES_1,
		StringIdentifier::SID_PARTENAIRES_2,
		StringIdentifier::SID_PARTENAIRES_3,
		StringIdentifier::SID_PARTENAIRES_4,

		StringIdentifier::SID_PRESIDENT_H1,
		StringIdentifier::SID_PRESIDENT_P,
		StringIdentifier::SID_PRESIDENT_SIGN,
		StringIdentifier::SID_BUREAU,
		StringIdentifier::SID_CA,
		StringIdentifier::SID_EQUIPES,

		StringIdentifier::SID_DSI,
		StringIdentifier::SID_QUALITE,
		StringIdentifier::SID_UA,
		StringIdentifier::SID_GRC,
		StringIdentifier::SID_COM,
		StringIdentifier::SID_TRESOR,

		StringIdentifier::SID_DESC_DSI,
		StringIdentifier::SID_DESC_QUALITE,
		StringIdentifier::SID_DESC_UA,
		StringIdentifier::SID_DESC_GRC,
		StringIdentifier::SID_DESC_COM,
		StringIdentifier::SID_DESC_TRESO,

		StringIdentifier::SID_PRES,
		StringIdentifier::SID_VP,
		StringIdentifier::SID_SG,
		StringIdentifier::SID_TRESO,
		StringIdentifier::SID_VTRESO,
		StringIdentifier::SID_RESP_DSI,
		StringIdentifier::SID_RESP_QUALITE,
		StringIdentifier::SID_RESP_UA_V,
		StringIdentifier::SID_RESP_UA_RM,
		StringIdentifier::SID_RESP_GRC,
		StringIdentifier::SID_RESP_COM,

		StringIdentifier::SID_CRP,
		StringIdentifier::SID_CRA,
		StringIdentifier::SID_CNH,
		StringIdentifier::SID_CNE,
		StringIdentifier::SID_JDP,
		StringIdentifier::SID_TEDX,

		StringIdentifier::SID_CRP_SUB,
		StringIdentifier::SID_CRA_SUB,
		StringIdentifier::SID_CNH_SUB,
		StringIdentifier::SID_CNE_SUB,
		StringIdentifier::SID_JDP_SUB,
		StringIdentifier::SID_TEDX_SUB,

		StringIdentifier::SID_CRP_P,
		StringIdentifier::SID_CRA_P,
		StringIdentifier::SID_CNH_P,
		StringIdentifier::SID_CNE_P,
		StringIdentifier::SID_JDP_P,
		StringIdentifier::SID_TEDX_P,

		StringIdentifier::SID_DEVIS_LASTNAME 	,
		StringIdentifier::SID_DEVIS_FIRSTNAME 	,
		StringIdentifier::SID_DEVIS_FIRM 		,
		StringIdentifier::SID_DEVIS_MAIL 		,
		StringIdentifier::SID_DEVIS_PHONE 		,
		StringIdentifier::SID_DEVIS_SUBJECT 	,
		StringIdentifier::SID_DEVIS_MESSAGE 	,
		StringIdentifier::SID_DEVIS_PLANNED_BUDGET,
		StringIdentifier::SID_DEVIS_PLANNED_DURATION,
		StringIdentifier::SID_DEVIS_CAPTCHA_CODE,
		StringIdentifier::SID_DEVIS_RESET,
		StringIdentifier::SID_DEVIS_SUBMIT,
		StringIdentifier::SID_DEVIS_HEADER,

		StringIdentifier::SID_FOOTER_DESCRIPTION,
		StringIdentifier::SID_FOOTER_RESEAUX,
		StringIdentifier::SID_FOOTER_CONTACT,

		StringIdentifier::SID_PROJECT_IDEA,

		StringIdentifier::SID_TELECHARGER_PLAQUETTE,
		StringIdentifier::SID_TELECHARGER_PORTFOLIO


		);

	const LINK_DEVIS = "{LINK_DEVIS}"; // titre du site
	const LINK_HOME = "{LINK_HOME}"; // titre du site
	const LINK_SKILLS ="{LINK_SKILLS}"; // titre du menu nos prestations
	const LINK_STUDY ="{LINK_STUDY}"; // lien de pres. du déroulement d'une étude
	const LINK_EVENTS ="{LINK_EVENTS}"; // lien vers la pres. de nos domaines de compétences
	const LINK_ENGAGEMENT ="{LINK_ENGAGEMENT}"; // lien vers la pres. de nos engagemnets
	const LINK_PARTNERS ="{LINK_PARTNERS}"; // titre du menu nous découvrir
	const LINK_TEAM ="{LINK_TEAM}"; // lien vers la pres. de l'équipe
	const LINK_TRUST ="{LINK_TRUST}"; // lien vers la pres. de nos partenaires
	const LINK_BLOG ="{LINK_BLOG}"; // lien vers la revue de press
	const LINK_NETWORK = "{LINK_NETWORK}";
	const LINK_MOUVEMENT ="{LINK_MOUVEMENT}"; // lien vers la pres. du mouvement
    const LINK_PLAN = "{LINK_PLAN}";

	const LINKS = array(
		StringIdentifier::LINK_DEVIS,
		StringIdentifier::LINK_HOME,
		StringIdentifier::LINK_SKILLS,
		StringIdentifier::LINK_STUDY,
		StringIdentifier::LINK_EVENTS,
		StringIdentifier::LINK_ENGAGEMENT,
		StringIdentifier::LINK_PARTNERS,
		StringIdentifier::LINK_TEAM,
		StringIdentifier::LINK_TRUST,
		StringIdentifier::LINK_BLOG,
		StringIdentifier::LINK_NETWORK,
		StringIdentifier::LINK_MOUVEMENT,
        StringIdentifier::LINK_PLAN,
		);
}

// ---------------------------------------------------------------------
// Classe dictionnaire
// ---------------------------------------------------------------------

class Dictionary implements \JsonSerializable {
	// -- consts
	// -- attributes
	private $lang = null;
	private $dict = null;
	// -- functions
	public function __construct($lang) {
		$this->lang = $lang;
		$this->dict = array();
	}
	/**
	 *	@brief
	 */
	public function jsonSerialize() {
		return [
			"lang" => $this->lang,
			"dict" => $this->mk_json_dict(),
		];
	}
	/**
	 *	@brief
	 */
	public function translate($stringId, $translation) {
		$this->dict[$stringId] = $translation; 
	}
	/**
	 *	@brief
	 */
	public function GetLang() {
		return $this->lang;
	}

	public function GetDict() {
		return $this->dict;
	}

	private function mk_json_dict() {
		$dict = array();
		foreach ($this->dict as $identifier => $translation) {
			array_push($dict, array($identifier, $translation));
		}
		return $dict; 
	}
}

// ---------------------------------------------------------------------
// Classe Traducteur
// ---------------------------------------------------------------------

class Translator  {
	// -- consts
	const DEFAULT_LANG = "fr";
	// -- attributes
	private $dictionaries = null;
	private $links = null;
	// -- functions
	public function __construct() {
		// nothing to do here
	}
	public function addDictionary($dict) {
		$this->dictionaries[$dict->GetLang()] = $dict;
	}

	public function setLinks($links) {
		$this->links = $links;
	}
	// public function dict($lang) {
	// 	if(!array_key_exists($lang, $this->dictionaries)) {
	// 		$lang = Translator::DEFAULT_LANG;
	// 	}
	// 	return $this->dictionaries[$lang];
	// }
	/**
	 *	@brief
	 */
	public function translate($lang, $content) {
		// on vérifie que le dictionnaire existe, si celui-ci n'existe pas on utilise le français par défaut
		if(!array_key_exists($lang, $this->dictionaries)) {
			$lang = Translator::DEFAULT_LANG;
		}
		foreach (StringIdentifier::SIDS as $identifier) {
			if(array_key_exists($identifier, $this->dictionaries[$lang]->GetDict())) {
				$content = str_replace($identifier, $this->dictionaries[$lang]->GetDict()[$identifier], $content);
			} else if(array_key_exists($identifier, $this->dictionaries[Translator::DEFAULT_LANG]->GetDict())) {
				$content = str_replace($identifier, $this->dictionaries[Translator::DEFAULT_LANG]->GetDict()[$identifier], $content);
			} else {
				$content = str_replace($identifier, "-!- traduction manquante(id=".$identifier.") -!-", $content);
			}
		}

		foreach (StringIdentifier::LINKS as $identifier) {
			if(isset($this->links)) {
				$content = str_replace($identifier, $this->links->GetDict()[$identifier]."&lang=".$lang, $content);
			} else {
				$content = str_replace($identifier, "-!- traduction manquante(id=".$identifier.") -!-", $content);
			}
		}
		// on retourne le contenu traduit
		return $content;
	}
}
