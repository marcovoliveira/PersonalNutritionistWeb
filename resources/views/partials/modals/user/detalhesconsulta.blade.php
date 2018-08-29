<div class="modal fade bd-example-modal-lg" id="detalhesconsulta">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Detalhes Consulta </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                            <div class="form-inline" style="margin-bottom: 2pc;">
                                <!-- Data da consulta -->
                                <div class="card border-light text-center" style="width: 13rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Data da consulta</h5>
                                        <o class="card-text" id="data">Sem data!</o>
                                    </div>
                                </div>
                                <!-- Peso -->
                                <div class="card border-light text-center" style="width: 9rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Peso</h5>
                                        <o class="card-text" id="peso">Sem peso!</o> Kg
                                    </div>
                                </div>

                                <!-- Altura -->
                                <div class="card border-light  text-center" style="width: 9rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Altura</h5>
                                        <o class="card-text" id="altura">Sem altura!</o> cm
                                    </div>
                                </div>

                                <!-- Gordura Visceral -->
                                <div class="card border-light text-center " style="width: 8rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Gordura Visceral</h5>
                                        <o class="card-text" id="gordura_visceral">Sem gordura visceral!</o>
                                    </div>
                                </div>

                                <!-- Massa Gorda -->
                                <div class="card border-light   text-center " style="width: 8rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Massa Gorda</h5>
                                        <o class="card-text" id="massa_gorda">Sem massa gorda!</o>%
                                    </div>
                                </div>


                            </div>



                            <div class="form-inline" style="margin-bottom: 2pc;">

                                <!-- Perimetro Cintura -->
                                <div class="card border-light  text-center" style="width: 9rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Perimetro Cintura</h5>
                                        <o class="card-text" id="perimetro_cintura">Sem perimetro cintura!</o> cm
                                    </div>
                                </div>

                                <!-- Perimetro Anca -->
                                <div class="card border-light text-center" style="width: 9rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Perimetro Anca</h5>
                                        <o class="card-text" id="Perimetro_anca">Sem perimetro anca!</o> cm
                                    </div>
                                </div>

                                <!-- Coeficiente -->
                                <div class="card border-light  text-center" style="width: 12rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Coeficiente de atividade fisica</h5>
                                        <o class="card-text" id="physical_activity">Sem coeficiente de atividade fisica!</o>
                                    </div>
                                </div>

                                <!-- Objetivo -->
                                <div class="card border-light  text-center" style="width: 9rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Objetivo</h5>
                                        <o class="card-text" id="objectivity">Sem objetivo!</o>
                                    </div>
                                </div>


                                <!-- IMC -->
                                <div class="card border-light  text-center" style="width: 8rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">IMC</h5>
                                        <o class="card-text" id="imc">Sem imc!</o> kg/m²
                                    </div>
                                </div>

                            </div>

                            <div class="form-inline" style="margin-bottom: 2pc;">

                                <!-- IMC -->
                                <div class="card border-light  text-center" style="width: 12rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Metabolismo Bassal</h5>
                                        <o class="card-text" id="basal_metabolism">Sem dados!</o> Kcal.
                                    </div>
                                </div>


                                <div class="card border-light  text-center" style="width: 12rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Necessidades Energeticas</h5>
                                        <o class="card-text" id="energy_needs">Sem dados!</o> Kcal.
                                    </div>
                                </div>

                                <div class="card border-light  text-center" style="width: 16rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Risco do perimetro de cintura</h5>
                                        <o class="card-text" id="waist_perimeter_risk">Sem dados!</o>
                                    </div>
                                </div>

                            </div>

                            <div class="form-inline" style="margin-bottom: 2pc;">

                                <div class="card border-light  text-center" style="width: 16rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Proteinas recomendadas</h5>
                                        <o class="card-text" id="p_recomendation">Sem dados!</o> g
                                    </div>
                                </div>

                                <div class="card border-light  text-center" style="width: 16rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Hidratos de Carbono recomendados</h5>
                                        <o class="card-text" id="hc_recomendation">Sem dados!</o> g
                                    </div>
                                </div>

                                <div class="card border-light  text-center" style="width: 16rem; margin-right: 1rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Gorduras recomendadas</h5>
                                        <o class="card-text" id="f_recomendation">Sem dados!</o> g
                                    </div>
                                </div>


                            </div>

                            <!-- Recomendaçoes-->
                            <div class="card border-light ">
                                <div class="card-body">
                                    <h5 class="card-title">Recomendações</h5>
                                    <o class="card-text" id="recomendacoes">Sem recomendações!</o>
                                </div>
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
