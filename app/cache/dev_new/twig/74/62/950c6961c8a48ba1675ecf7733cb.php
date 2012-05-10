<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7462950c6961c8a48ba1675ecf7733cb extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"fos_user_user_show\">
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "buy"));
        foreach ($context['_seq'] as $context["_key"] => $context["buy"]) {
            // line 4
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 5
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
                foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                    // line 6
                    echo "\t\t\t";
                    if ((($this->getAttribute($this->getAttribute($this->getContext($context, "buy"), "user"), "id") == $this->getContext($context, "key")) && ($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id") == $this->getContext($context, "key")))) {
                        echo "\t
\t\t\t\t";
                        // line 7
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loc"));
                        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                            // line 8
                            echo "\t\t\t\t\t";
                            if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id"))) {
                                // line 9
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 10
                                    echo "\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getContext($context, "product"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                                        // line 11
                                        echo "\t\t\t\t\t\t\t<h6>Έχετε αγοράσει το προϊόν:</h6>";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
                                        echo "
\t\t\t\t\t\t\t";
                                    }
                                    // line 13
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 14
                                echo "\t\t\t\t\t";
                            }
                            // line 15
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 16
                        echo "\t\t\t\t<h6>σε ποσότητα:</h6>
\t\t\t";
                        // line 17
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "buy"), "quantity"), "html", null, true);
                        echo "\t
\t\t\t";
                    }
                    // line 19
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 20
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['buy'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
        foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
            // line 23
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 24
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id") == $this->getContext($context, "key"))) {
                    echo "\t
\t\t\t";
                    // line 25
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loc"));
                    foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                        // line 26
                        echo "\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id"))) {
                            // line 27
                            echo "\t\t\t\t\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 28
                                echo "\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getContext($context, "product"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                                    // line 29
                                    echo "\t\t\t\t\t\t\t<h6>Πουλάτε το προϊόν:</h6>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
                                    echo "
\t\t\t\t\t\t";
                                }
                                // line 31
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 32
                            echo "\t\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 34
                    echo "\t\t\t\t<h6>σε ποσότητα:</h6>
\t\t\t";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
                    echo "
\t\t\t<h6>με ελάχιστη ποσότητα αγοράς:</h6>
\t\t\t";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "minquantity"), "html", null, true);
                    echo "
\t\t";
                }
                // line 39
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
