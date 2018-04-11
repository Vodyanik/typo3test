<?php

class Frontend_action_contentelement_655c292837df8bc24d2891123396c25297dde372 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!-- Three -->
<section id="three">
    <h2>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
            ';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array7)]);

$output6 .= '<br />
        ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </h2>
    <p>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array16);
};
$arguments14 = array();
$arguments14['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '<br />
        ';
return $output13;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
    </p>
    <div class="row">
        <div class="8u 12u$(small)">
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name"></div>
                    <div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email"></div>
                    <div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
                </div>
            </form>
            <ul class="actions">
                <li><input type="submit" value="Send Message"></li>
            </ul>
        </div>
        <div class="4u$ 12u$(small)">
            <ul class="labeled-icons">
                <li>
                    <h3 class="icon fa-home"><span class="label">Address</span></h3>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_bodytext2', $array25)]);
};
$arguments23 = array();
$arguments23['value'] = NULL;
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '<br />
                    ';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_bodytext2', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
                </li>
                <li>
                    <h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_bodytext3', $array34)]);
};
$arguments32 = array();
$arguments32['value'] = NULL;
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;
$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '<br />
                    ';
return $output31;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_bodytext3', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
                </li>
                <li>
                    <h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return 'hello@untitled.tld';
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['email'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = NULL;
$arguments35['rel'] = NULL;
$arguments35['rev'] = NULL;
$arguments35['target'] = NULL;
$arguments35['email'] = 'hello@untitled.tld';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
                </li>
            </ul>
        </div>
    </div>
</section>';

return $output0;
}


}
#