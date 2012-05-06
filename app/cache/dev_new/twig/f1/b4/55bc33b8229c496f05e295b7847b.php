<?php

/* AcmeUserBundle:Default:buy.html.twig */
class __TwigTemplate_f1b455bc33b8229c496f05e295b7847b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"fos_user_agora\">

";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
        foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
            // line 7
            echo "
<li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
            echo "
";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "price"), "html", null, true);
            echo "
";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "origin"), "html", null, true);
            echo "
";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
            echo "
\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 13
                echo "\t\t";
                if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id"))) {
                    // line 14
                    echo "\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
                    echo "
\t\t";
                }
                // line 16
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "    </li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "upol"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            echo " 
      ";
            // line 20
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "
 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo " 
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
