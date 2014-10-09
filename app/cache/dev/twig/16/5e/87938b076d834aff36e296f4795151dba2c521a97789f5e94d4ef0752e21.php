<?php

/* UP1ThesisBundle::base.html.twig */
class __TwigTemplate_165e87938b076d834aff36e296f4795151dba2c521a97789f5e94d4ef0752e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <div class=\"jumbotron\">
            <h1 align=\"center\">Events application Traditional- Thesis prototype</h1>
        </div>
        <div class=\"container\">
        </div>
        
        <div class=\"container\">
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>

    </body>
</html>";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UP1ThesisBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  44 => 23,  42 => 22,  20 => 2,);
    }
}
