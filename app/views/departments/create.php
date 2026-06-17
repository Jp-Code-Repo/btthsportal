<h2 class="mb-4">Create Department</h2>

<div class="card dashboard-card">

    <div class="card-body">

        <form>

            <div class="row">

                <div class="col-12 mb-3">

                    <label class="form-label">
                        Department Name
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter department name"
                    >

                </div>

                <div class="col-md-6 mb-4">

                    <label class="form-label">
                        Status
                    </label>

                    <select class="form-select">

                        <option selected>
                            Active
                        </option>

                        <option>
                            Inactive
                        </option>

                    </select>

                </div>

            </div>

            <div class="d-flex gap-2">

                <button
                    type="button"
                    class="btn btn-primary"
                >
                    Save Department
                </button>

                <a
                    href="/portal/public/departments"
                    class="btn btn-outline-secondary"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>