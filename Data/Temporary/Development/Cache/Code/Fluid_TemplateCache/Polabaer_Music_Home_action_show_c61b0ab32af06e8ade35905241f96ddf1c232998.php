<?php class FluidCache_Polabaer_Music_Home_action_show_c61b0ab32af06e8ade35905241f96ddf1c232998 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
   
    <div class="home">
        <div class="container contentBackground">
            <div class="teaser">
                <div class="beschreibung">
                    <img src="http://polabaer.de/Bilder/Objekte/teaserBeschreibung.png" />
                </div>
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1 = array();
$arguments1['action'] = 'show';
$arguments1['controller'] = 'Authentication';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['package'] = NULL;
$arguments1['subpackage'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['useParentRequest'] = false;
$arguments1['absolute'] = true;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Anmelden';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
            </div>
            <div class="model">
                <img src="http://polabaer.de/Bilder/Objekte/modelStartseite.png" />
            </div>            
        </div>
        <div class="optionContainer">
            <div class="option">
                <div class="icon">
                    <img src="http://polabaer.de/Bilder/Objekte/bandIcon.png" />
                </div>
                <div class="ueberschrift">
                    Band
                </div>
                <div class="beschreibung">
                    Du spielst bereits in einer Band und ihr sucht noch Mitglieder,
                    dann erstelle dir ein Profil und gründe deine Band.
                    Du kannst bestehende Mitglieder einladen und angeben wer in eurem Team noch fehlt.
                    Sind alle Angaben vollständig und mind. die Hälfte der Bandmitglieder vertreten,
                    erscheint euer Profil in der Suche.
                </div>            
            </div>       
            <div class="option">
                <div class="icon">
                    <img src="http://polabaer.de/Bilder/Objekte/mukkerIcon.png" />
                </div>
                <div class="ueberschrift">
                    Mukker
                </div>
                <div class="beschreibung">
                    Du bist bisher alleine und würdest gerne in einer Band spielen,
                    dann erstelle dir ein Profil und mach dich auf die Suche.
                    Sind alle deine Angaben vollständig,
                    wird dein Profil für die Suche freigegeben und du hast die Möglichkeit
                    in den Suchanfragen der Bands oder der anderen Künstler zustöbern.
                </div>            
            </div>
            <div class="option">
                <div class="icon">
                    <img src="http://polabaer.de/Bilder/Objekte/fanIcon.png" />
                </div>
                <div class="ueberschrift">
                    Fan
                </div>
                <div class="beschreibung">
                    Du bist gar nicht auf der Suche,
                    sondern einfach interessiert an Bands und dem buten Geschehen
                    auf dieser Seite, dann erstell dir einen Fanaccount.
                    Du kannst dann zwar keine Suchanfragen machen,
                    hast aber freien Zugang zu den Profilen und kannst deine lieblings Künstlern folgen.
                </div>            
            </div>
        </div>
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments5 = array();
$arguments5['name'] = 'Default';
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output4 .= $viewHelper7->initializeArgumentsAndRender();

$output4 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments8 = array();
$arguments8['name'] = 'Title';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};

$output4 .= '';

$output4 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments10 = array();
$arguments10['name'] = 'Content';
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
   
    <div class="home">
        <div class="container contentBackground">
            <div class="teaser">
                <div class="beschreibung">
                    <img src="http://polabaer.de/Bilder/Objekte/teaserBeschreibung.png" />
                </div>
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments13 = array();
$arguments13['action'] = 'show';
$arguments13['controller'] = 'Authentication';
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['package'] = NULL;
$arguments13['subpackage'] = NULL;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['useParentRequest'] = false;
$arguments13['absolute'] = true;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return 'Anmelden';
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output12 .= $viewHelper15->initializeArgumentsAndRender();

$output12 .= '
            </div>
            <div class="model">
                <img src="http://polabaer.de/Bilder/Objekte/modelStartseite.png" />
            </div>            
        </div>
        <div class="optionContainer">
            <div class="option">
                <div class="icon">
                    <img src="http://polabaer.de/Bilder/Objekte/bandIcon.png" />
                </div>
                <div class="ueberschrift">
                    Band
                </div>
                <div class="beschreibung">
                    Du spielst bereits in einer Band und ihr sucht noch Mitglieder,
                    dann erstelle dir ein Profil und gründe deine Band.
                    Du kannst bestehende Mitglieder einladen und angeben wer in eurem Team noch fehlt.
                    Sind alle Angaben vollständig und mind. die Hälfte der Bandmitglieder vertreten,
                    erscheint euer Profil in der Suche.
                </div>            
            </div>       
            <div class="option">
                <div class="icon">
                    <img src="http://polabaer.de/Bilder/Objekte/mukkerIcon.png" />
                </div>
                <div class="ueberschrift">
                    Mukker
                </div>
                <div class="beschreibung">
                    Du bist bisher alleine und würdest gerne in einer Band spielen,
                    dann erstelle dir ein Profil und mach dich auf die Suche.
                    Sind alle deine Angaben vollständig,
                    wird dein Profil für die Suche freigegeben und du hast die Möglichkeit
                    in den Suchanfragen der Bands oder der anderen Künstler zustöbern.
                </div>            
            </div>
            <div class="option">
                <div class="icon">
                    <img src="http://polabaer.de/Bilder/Objekte/fanIcon.png" />
                </div>
                <div class="ueberschrift">
                    Fan
                </div>
                <div class="beschreibung">
                    Du bist gar nicht auf der Suche,
                    sondern einfach interessiert an Bands und dem buten Geschehen
                    auf dieser Seite, dann erstell dir einen Fanaccount.
                    Du kannst dann zwar keine Suchanfragen machen,
                    hast aber freien Zugang zu den Profilen und kannst deine lieblings Künstlern folgen.
                </div>            
            </div>
        </div>
    </div>
';
return $output12;
};

$output4 .= '';

return $output4;
}


}
#0             10932     