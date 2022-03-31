                            <?php echo form_open_multipart('BulkUpload/importLead'); ?>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-md-4 mt-15">
                                                <label>Upload Bulk Leads</label>
                                                <input type="file" name="file" class="form-control" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-15">
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </div>
                            </form>