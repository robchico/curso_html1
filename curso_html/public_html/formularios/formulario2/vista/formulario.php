<?php

echo '<form id="formContacto" class="m-4 p-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="inputEmail4" id="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" name="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select name="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="number"  class="form-control" name="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button id="enviar" class="btn btn-primary">Enviar</button>
            </form>';

