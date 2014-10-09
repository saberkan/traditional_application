<?php

/* UP1ThesisBundle:Event:index.html.twig */
class __TwigTemplate_f2e671ff5eeebe1b6aaaf055d421d231f881a2ca9927ed487225d0ae123a5e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UP1ThesisBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UP1ThesisBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Event list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Eventtitle</th>
                <th>Eventdescription</th>
                <th>Eventimagelink</th>
                <th>Eventdate</th>
                ";
        // line 12
        if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "allevents") || ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "subscriptions"))) {
            // line 13
            echo "                    <th>Subscribe</th>
                ";
        }
        // line 15
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eventTitle"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eventDescription"), "html", null, true);
            echo "</td>
                <td><img  height=\"200\" width=\"300\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eventImageLink"), "html", null, true);
            echo "\"></img></td>
                <td>";
            // line 23
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eventDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eventDate"), "Y-d-m"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 25
            $context["subscribed"] = false;
            echo " 
                    ";
            // line 26
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "allevents")) {
                // line 27
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subscriptionUser"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "                            ";
                    if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))) {
                        // line 29
                        echo "                                ";
                        $context["subscribed"] = true;
                        echo " 
                            ";
                    }
                    // line 30
                    echo " 
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                        ";
                if ((!(isset($context["subscribed"]) ? $context["subscribed"] : $this->getContext($context, "subscribed")))) {
                    // line 33
                    echo "                            <form method=\"POST\" action=\"subscribe\">
                                <input type=\"hidden\" name=\"idEvent\" value=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "\"/>
                                <button type=\"submit\" class=\"btn btn-default\">Subscribe</button>
                            </form>
                        ";
                } else {
                    // line 38
                    echo "                            Subscribed
                        ";
                }
                // line 40
                echo "                    ";
            }
            // line 41
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "subscriptions")) {
                // line 42
                echo "                    <form method=\"POST\" action=\"unsubscribe\">
                        <input type=\"hidden\" name=\"idEvent\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\"/>
                        <button type=\"submit\" class=\"btn btn-default\">Unsubscribe</button>
                    </form>
                    ";
            }
            // line 47
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

            ";
        // line 53
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "myevents")) {
            // line 54
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("event_create");
            echo "\">create new event</a><br>
            ";
        }
        // line 56
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("nav_center");
        echo "\">
                back 
            </a>
    ";
    }

    public function getTemplateName()
    {
        return "UP1ThesisBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  156 => 54,  154 => 53,  149 => 50,  141 => 47,  134 => 43,  131 => 42,  128 => 41,  125 => 40,  121 => 38,  114 => 34,  111 => 33,  108 => 32,  101 => 30,  95 => 29,  92 => 28,  87 => 27,  85 => 26,  81 => 25,  74 => 23,  70 => 22,  66 => 21,  60 => 20,  57 => 19,  53 => 18,  48 => 15,  44 => 13,  42 => 12,  31 => 3,  28 => 2,);
    }
}
